<?php session_start() ?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>Logowanie</h3>
    <?php

 if(isset($_SESSION['error'])){
    echo $_SESSION['error'];
    unset($_SESSION['error']);
  }
     ?>
    <form action="./scripts/login.php" method="post">
      <input type="text" name="login" placeholder="login">
      <input type="text" name="pass"  placeholder="pass">
      <input type="submit" value="Zatwierdź">
    </form>

  </body>
</html>
