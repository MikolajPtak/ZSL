<?php session_start();?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dane</title>
  </head>
  <body>

  <?php
   echo $_SESSION['name']."<br>";
   $_SESSION["surname"] = "Nowak";

   ?>
<a href="./surnamename.php">nazwisko i imie</a>
  </body>
</html>
