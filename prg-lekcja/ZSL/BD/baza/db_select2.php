<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>użytkownicy</title>
    <link rel="stylesheet" href="..\styl\style.css">
  </head>
  <body>
    <h4>Użytkownicy</h4><hr><br>

   <?php
    $connect = new mysqli("localhost","root","","zsl_3pi2tg2");

    $sql = "SELECT * FROM `users`";
    $results = $connect ->query($sql);

  echo <<< TABLE
  <table>
    <tr>
      <th>Id:</th>
      <th>Imię</th>
      <th>Nazwisko</th>
      <th>Data urodzenia</th>
      <th>Data utworzenia konta</th>
    </tr>

TABLE;
    while ($user = $results->fetch_assoc()) {
      echo <<< USER
      <tr>
       <th>$user[ID]</th>
       <th>$user[Name]</th>
       <th>$user[surname]</th>
       <th>$user[date]</th>
       <th>$user[creationdate]</th>
      </tr>

USER;
    }
    echo "</table>";
     ?>

  </body>
</html>
