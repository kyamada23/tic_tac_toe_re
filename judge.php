<?php
require('boardPage.php');
session_start();

if(isset($_POST['turn']) && isset($_POST['square_array'])){

  $turn = $_POST['turn'];
  $next_turn = $_POST['next_turn'];
  $square_array = $_POST['square_array'];

  //jsに情報投げつける（判定結果、手番のアイコン、手番の名前）
  $result['judge'] = Judge::judgeGame($square_array);
  $result['icon'] = $_SESSION[$turn]->getIcon();
  $result['name'] = $_SESSION[$turn]->getIconName();
  $result['next_name'] = $_SESSION[$next_turn]->getIconName();
  echo json_encode($result);
  exit;
}
?>