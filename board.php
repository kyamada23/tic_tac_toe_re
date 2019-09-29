<?php

require 'boardPage.php';

$proc = new BoardPage();
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
            <h1 class="page-top__title"><?php echo $data['board']->getBoardName() ?></h1>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="p-board">
              <h2 class="js-message">開始！</h2>
              <?php $data['board']->createBoard(); ?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <form class="c-form" method="post">
              <input type="submit" value="リセット" class="c-button" name="reset">
              <input type="submit" value="TOPページに戻る" class="c-button" name="back">
            </form>
          </div>
        </div>
      </section>
    </section>

    <script src="common/vendor/jquery-3.4.1.min.js"></script>
    <script src="common/common.js"></script>

  </body>
</html>