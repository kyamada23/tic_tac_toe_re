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
    <title>tic tac toe</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  </head>
  <body>
    <section class="main">
      <h1><?php echo $data['board']->getBoardName() ?></h1>
      <div class="board-container">
        <h2 class="js-message">開始！</h2>
        <?php $data['board']->createBoard(); ?>
      </div>
      <form class="form-container" method="post">
        <input type="submit" value="リセット" class="button" name="reset">
        <input type="submit" value="TOPページに戻る" class="button" name="back">
      </form>
    </section>

    <script src="common/vendor/jquery-3.4.1.min.js"></script>
    <script src="common/common.js"></script>

  </body>
</html>