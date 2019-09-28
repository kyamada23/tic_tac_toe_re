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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tic tac toe</title>
    <link rel="stylesheet" type="text/css" href="dist/style.css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  </head>
  <body>
    <section id="main">
      <section class="container page-top">
        <div class="row">
          <div class="col">
            <h1 class="page-top__title">tic tac toe</h1>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <form class="c-form" method="post">
              <h2 class="c-form__title">選んでください！</h2>
              <ul>
                <li class="c-radio">
                  <input type="radio" id="f-option" name="board-type" value="circle-cross" checked="checked">
                  <label class="c-radio__label" for="f-option">Circle & Cross</label>
                  <div class="check"></div>
                </li>
                <li class="c-radio">
                  <input type="radio" id="s-option" name="board-type" value="dog-cat">
                  <label class="c-radio__label" for="s-option">Dog & Cat</label>
                  <div class="check"><div class="inside"></div></div>
                </li>
                <li class="c-radio">
                  <input type="radio" id="t-option" name="board-type" value="bomb-burn">
                  <label class="c-radio__label" for="t-option">Bomb & Burn</label>
                  <div class="check"><div class="inside"></div></div>
                </li>
              </ul>
              <input type="submit" value="開始" class="c-button">
            </form>
          </div>
        </div>
      </section>
    </section>
  </body>
</html>