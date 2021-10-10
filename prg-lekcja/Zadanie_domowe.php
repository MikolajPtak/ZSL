<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>
</head>
<body>
    <h1>początek strony</h1>
    <h3>ilość osób w rodzinie</h3>
    <?php
    if (!isset($_POST['person'])&& !isset($_POST['buttonavg'])) {
      echo <<< FORMCOUNTPERSON
       <form  method="post">
        <input type="number" name="person" placeholder="Podaj ilość osób"><br><br>
        <input type="submit" name="" value="Zatwierdź">
       </form>
      FORMCOUNTPERSON;

    }
    ?>

    <?php

    if (!empty($_POST['person'])) {
      $i=$_POST['person']+1;
      echo "<form  method='post'>";
      while ($_POST['person']>0) {
        $e=$i-$_POST['person'];
        echo "<input type='number' name='age$e' placeholder='Podaj wiek osoby $e'><br><br>";
        $_POST['person']=$_POST['person']-1;
            }
        echo "<input type='submit' name='buttonavg' value='Oblicz średni wiek'>";
        echo "</form><br><br>";
        $control1=1;

    }

    ?>
    <?php
    if (isset($_POST['buttonavg'])) {
    //print_r($_POST);
    $AGEavg=0;
    foreach ($_POST as $key => $value) { //numberFromat
      if ($key!='buttonavg') {
      echo "$key: $value<br>";
      $AGEavg=$AGEavg+$value;
    }
  }
  $countppl=count($_POST)-1;
  echo $AGEavg.'  suma<br>';
  echo $countppl.'  liczba osób<br>';
  $final1=$AGEavg/$countppl;
  $final2=number_format($final1,2,".");
  echo $final1."  średnia<br>";
  echo $final2."  średnia do 2 po przecinku<br>";
  echo "<h3><a href='http://localhost/ZSL/Zadanie_domowe.php'>RESET</a></h3>";
}
    ?>
    <h1>Koniec strony</h1>
</body>
</html>
