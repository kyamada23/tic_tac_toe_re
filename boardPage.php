<?php

require 'common/abstractPage.php';
require 'gameParts.php';

class BoardPage extends AbstractPage
{
  protected function main(){
    session_start();

    if(!empty($_POST)){
      if(isset($_POST['back'])){
        header("Location:index.php");
        $_POST = array();
        exit;
      }elseif(isset($_POST['reset'])){
        //初期化
        $_POST = array();
      }
    }

    //アイコン選択情報を取得
    $icon_type = $_GET['type'];

    //ボードを作る
    $board = new Board($icon_type);
    $this->data['board'] = $board;

    //アイコンを作る
    switch ($icon_type){
      case 'circle-cross':
        $playFirstIcon = new FlashIcon('far fa-circle', 'Circle'); //◯アイコン
        $drawFirstIcon = new RotateIcon('fas fa-times', 'Cross');  //×アイコン
        break;
      case 'dog-cat':
        $playFirstIcon = new RotateIcon('fas fa-dog', 'Dog'); //犬アイコン
        $drawFirstIcon = new RotateIcon('fas fa-cat', 'Cat'); //猫アイコン
        break;
      case 'bomb-burn':
        $playFirstIcon = new FlashIcon('fas fa-bomb', 'Bomb');  //爆弾アイコン
        $drawFirstIcon = new FlashIcon('fas fa-burn', 'Burn');  //炎アイコン
        break;
    }

    $this->data['playFirstIcon'] = $playFirstIcon;
    $this->data['drawFirstIcon'] = $drawFirstIcon;

    $_SESSION['play'] = $playFirstIcon;
    $_SESSION['draw'] = $drawFirstIcon;
  }
}

//判定クラス
class Judge
{  
  //3つの値が同じであれば、その値を返す(空文字3つならfalse)
  private static function judgeLine($line){
    if(!in_array('', $line, true)){
      $compress_line = array_unique($line);
      if(count($compress_line) === 1){
        return $compress_line;
      }  
    }
    return false;
  }

  //判定する
  public static function judgeGame($boardInfo){
    //上の行
    $result = Judge::judgeLine(array_slice($boardInfo, 0, 3));
    //真ん中の行
    if(!$result){
      $result = Judge::judgeLine(array_slice($boardInfo, 3, 3));
    }
    //下の行
    if(!$result){
      $result = Judge::judgeLine(array_slice($boardInfo, 6, 3));
    }
    //左の列
    if(!$result){
      $line = [$boardInfo[0], $boardInfo[3], $boardInfo[6]];
      $result = Judge::judgeLine($line);
    }
    //真ん中の列
    if(!$result){
      $line = [$boardInfo[1], $boardInfo[4], $boardInfo[7]];
      $result = Judge::judgeLine($line);
    }
    //右の列
    if(!$result){
      $line = [$boardInfo[2], $boardInfo[5], $boardInfo[8]];
      $result = Judge::judgeLine($line);
    }
    //左上から右下
    if(!$result){
      $line = [$boardInfo[0], $boardInfo[4], $boardInfo[8]];
      $result = Judge::judgeLine($line);
    }
    //左下から右上
    if(!$result){
      $line = [$boardInfo[2], $boardInfo[4], $boardInfo[6]];
      $result = Judge::judgeLine($line);
    }
    return $result;
  }
}
?>