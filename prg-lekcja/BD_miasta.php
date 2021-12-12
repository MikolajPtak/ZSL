<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href=".\styl\style.css">
    <title>MIASTA</title>
  </head>
  <body>
    <h3>Miasta</h3><hr><br>
    <?php
    $connect = new mysqli("localhost","root","","miasta");
    $sql = "SELECT * FROM `cities`";
    $results = $connect ->query($sql);
    if(isset($_GET['error'])){
      echo $_GET['error'];
    }
    echo <<< TABLE
    <table>
      <tr>
        <th>Id miasta:</th>
        <th>Nazwa miasta:</th>
      </tr>
  TABLE;
  while ($city = $results->fetch_assoc()) {
    echo <<< CITY
    <tr>
     <td>$city[city_ID]</td>
     <td>$city[city]</td>
     <td><a href="./deletecity.php?DELETEcity=$city[city_ID]">Usuń</a></td>
    </tr>
CITY;
}


    ?>

  </body>
</html>
