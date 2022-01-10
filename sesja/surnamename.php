<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Imię i nazwisko</title>
  </head>
  <body>
    <h3>Imię i nazwisko</h3><br>
<?php
echo $_SESSION["name"]." ".$_SESSION["surname"]."<br>";
echo "Identyfikator sesji: ".session_id();
echo "<br>";
session_regenerate_id();
echo "Identyfikator sesji: ".session_id();
echo "<br>";


?>
<br><br><hr>
<a href="./sesja.php">Strona Główna</a>

  </body>
</html>
