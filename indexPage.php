<?php

require 'common/abstractPage.php';

class IndexPage extends AbstractPage
{
  protected function main(){
    //POSTデータを
    if(!empty($_POST)){
      //アイコンタイプを取得
      $type = $_POST['board-type'];

      header("Location:board.php?type=".$type);
      exit;
    }
  }
}
?>