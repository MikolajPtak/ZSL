<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HOMEPAGE</title>
  </head>
  <body>
    <h3>Strona domowa</h3>
    <?php
if(isset($_SESSION['login'])){
  echo "Zalogowano jako: ".$_SESSION['login'];
  echo "<a href='./scripts/logout.php'>Wyloguj</a>";
}

    //unset($_SESSION['name']);

    $_SESSION['name'] = "Janusz";

   //session_destroy();




     ?>
<a href="./data.php">DANE</a>
<a href="./login.php">Logowanie</a>

  </body>
</html>
