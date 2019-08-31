$(function(){

  //ボードクリック時の動作
  var $square = $('.js-click-square') || null;
  if($square !== null){
    $square.on('click', function(){
      var $data = $(this).children('data');
      var $icon= $(this).children('i');
      var $table = $(this).parents('table');
      var turn = $table.attr('value');
      var next_turn = '';
      var $message = $table.prev('.js-message');
      var square_array = [];

      if($data.val() === ''　&& (turn !== 'finish')){
        $data.val(turn);

        if(turn === 'play'){
          next_turn = 'draw';
        }else if(turn === 'draw'){
          next_turn = 'play';
        }

        $.each($table.find('data'), function(i, val){
          square_array.push(val.value);
        }); 

        $.ajax({
          type: "POST",
          url: "judge.php",
          data: { turn : turn, next_turn : next_turn, square_array : square_array},
          dataType: 'json',
        }).done(function( data ){
          //アイコン追加
          $icon.attr('class', data['icon'] + ' fa-5x icon-color');

          //勝負が決まった時の処理
          if(data['judge']){
            $table.attr('value', 'finish');
            
            //メッセージを書き換える（勝ち、引き分け）
            $message.text(data['name'] + ' の勝ちです！');

            //勝負が決まっていない時の処理
          }else{
            //手番更新
            $table.attr('value', next_turn);
            //メッセージ書き換え
            $message.text('次は ' + data['next_name'] + ' の番です！');
          }
        }).fail(function( msg ){
          console.log('Ajax Error');
        });
      }
    });
  }
});