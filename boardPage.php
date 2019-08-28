<?php

require 'common/abstractPage.php';
require 'gameParts.php';

class BoardPage extends AbstractPage
{
  protected function main(){
    //GETパラメータでアイコン情報を取得
    $icon_type = $_GET['type'];
    $icon_color = '#AAAAAA';

    //アイコンを作る
    switch ($icon_type){
      case 'circle-cross':
        $playFirstIcon = new RotateIcon('Circle', $icon_color);
        $drawFirstIcon = new RotateIcon('Cross', $icon_color);
        break;
      case 'dog-cat':
        $playFirstIcon = new RotateIcon('Dog', $icon_color);
        $drawFirstIcon = new RotateIcon('Cat', $icon_color);
        break;
      case 'bomb-burn':
        $playFirstIcon = new RotateIcon('Bomb', $icon_color);
        $drawFirstIcon = new RotateIcon('Burn', $icon_color);
        break;
    }
    
    //ボードを作る
    $board = new Board($_GET['type']);
    $data['board'] = $board;

    $this->data['select_name'] = $board->getBoardName();
  }
}

Class Judge{
  
}

?>