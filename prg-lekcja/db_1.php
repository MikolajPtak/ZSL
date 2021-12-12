<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>użytkownicy</title>
    <link rel="stylesheet" href=".\styl\style.css">
  </head>
  <body>
    <h4>Użytkownicy</h4><hr><br>

   <?php
    $connect = new mysqli("localhost","root","","zsl_3pi2t");

    $sql = "SELECT * FROM `user`";
    $results = $connect ->query($sql);
    if(isset($_GET['error'])){
      echo $_GET['error'];
    }

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
       <td>$user[ID]</td>
       <td>$user[name]</td>
       <td>$user[surname]</td>
       <td>$user[date]</td>
       <td>$user[creationdate]</td>
       <td><a href="./deleteuser.php?DELETEuser=$user[ID]">Usuń</a></td>
      </tr>
USER;
    }
    echo "</table>";
     ?>

  </body>
</html>
