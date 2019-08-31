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
      <h1><?php echo $data['select_name'] ?></h1>
      <div class="board-container">
        <h2 class="js-message">開始！</h2>
        <?php $data['board']->createBoard(); ?>
      </div>
    </section>

    <script src="common/vendor/jquery-3.4.1.min.js"></script>
    <script src="common/common.js"></script>

  </body>
</html>