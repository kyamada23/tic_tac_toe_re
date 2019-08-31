<?php

require 'indexPage.php';

$proc = new IndexPage();
$proc->exec();
$data = $proc->getData();

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>tic tac toe</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  </head>
  <body>
    <section class="main">
      <h1>tic tac toe</h1>
      <form class="form-container" method="post">
        <h2>選んでください！</h2>
        <ul>
          <li>
            <input type="radio" id="f-option" name="board-type" value="circle-cross" checked="checked">
            <label for="f-option">◯ ❌</label>
            <div class="check"></div>
          </li>
          <li>
            <input type="radio" id="s-option" name="board-type" value="dog-cat">
            <label for="s-option">DOG & CAT</label>
            <div class="check"><div class="inside"></div></div>
          </li>
          <li>
            <input type="radio" id="t-option" name="board-type" value="bomb-burn">
            <label for="t-option">BOMB & BURN</label>
            <div class="check"><div class="inside"></div></div>
          </li>
        </ul>
        <input type="submit" value="開始" class="button">
      </form>
    </section>
  </body>
</html>