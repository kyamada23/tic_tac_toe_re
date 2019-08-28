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
        <h2>メッセージ</h2>
        <table>
          <tr style="border-left-style: hidden; border-top-style: hidden; border-right-style: hidden;">
            <td><i class="far fa-circle fa-5x icon-color"></i></td>
            <td><i class="fas fa-times fa-5x icon-color"></i></i></td>
            <td><i class="far fa-circle fa-5x icon-color"></a></td>
          </tr>
          <tr style="border-left-style: hidden; border-right-style: hidden;">
            <td><i class="fas fa-dog fa-5x icon-color"></i></i></td>
            <td><i class="fas fa-cat fa-5x icon-color"></i></i></td>
            <td><i class="fas fa-dog fa-5x icon-color"></td>
          </tr>
          <tr style="border-left-style: hidden; border-bottom-style: hidden; border-right-style: hidden;">
            <td><i class="fas fa-burn fa-5x icon-color"></i></td>
            <td><i class="fas fa-bomb fa-5x icon-color"></i></td>
            <td><i class="fas fa-burn fa-5x icon-color"></td>
          </tr>
        </table>
      </div>
    </section>
  </body>
</html>