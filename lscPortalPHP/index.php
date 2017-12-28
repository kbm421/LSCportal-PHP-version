<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>LSC Portal</title>
    <link rel="stylesheet" href="./css/main.css">
  </head>
  <body>
    <div class="top_wrapper">
      <header>
        <div class="centerize">
          <img src="img\logo.png" alt="logo">
        </div>
      </header>
      <nav>
        <ul>
          <?php
            echo file_get_contents('navigation.php');
           ?>
        </ul>
      </nav>
      <div class="display">
        <?php
        if(!empty($_GET['id'])){
          echo file_get_contents($_GET['id'].'.php');
        }
         ?>
      </div>
  </body>
</html>
