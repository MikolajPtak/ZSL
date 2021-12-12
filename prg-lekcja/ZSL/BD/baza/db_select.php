<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>użytkownicy</title>
  </head>
  <body>
    <h4>Użytkownicy</h4><hr><br>

   <?php
    $connect = new mysqli("localhost","root","","zsl_3pi2tg2");

    $sql = "SELECT * FROM `users`";
    $results = $connect ->query($sql);


    while ($user = $results->fetch_assoc()) {
      echo <<< USER
      Identyfikator: $user[ID]<br>
      Imię i nazwisko: $user[Name] $user[surname]<br>
      Data urodzenia: $user[date]<br>
      Data utworzenia konta: $user[creationdate]<br>
      <hr>
USER;

    };
     ?>
  </body>
</html>
