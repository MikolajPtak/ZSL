<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>


</head>
<body>

<hr>
    SLAJD 1 <br><hr>


    <?php
    echo htmlspecialchars("\"I'll learn PHP \"");
    echo "<br>";

    echo htmlspecialchars("\"C:\\xammp\htdocs\"");
    echo "<br> <hr>";
    ?>

      <form action="index.php" method="get">
        <input type="text" name="name" placeholder="Podaj imię">
        <input type="submit" value="zatwierdź">
      </form>

    <?php
    echo "<br><br>";
    if (!empty($_GET['name'])) {echo $_GET["name"];}
    echo "<br><hr>";
    ?>


    SLAJD 2 <br><hr>

    <?php
    $imie="Stefan";
    $pensja= "4600";
    echo <<< tabela
             <style>
               .imie{color:blue;}
               .pensja{color:red;}
               table,td{border:solid black 1px;border-collapse: collapse;}
             </style>

             <table>
              <tr>
               <td class="imie">Imię</td>
               <td class="pensja">Pensja</td>
              </tr>
              <tr>
               <td class="imie">$imie</td>
               <td class="pensja">$pensja</td>
              </tr>
             </table>

             <hr>
    tabela;

$var = 27;
echo "Zmienna testowa to ".$var.". <br>";
for ($i=40; $i>0 ; $i-=10) {
  if($var>$i){echo "Liczba jest większa od ".$i;break;}
}
echo "<hr>";

echo "SLAJD 3 <br><hr>";

$a='A00';
for ($b=0; $b<6 ; $b++) {
  echo $a;
  echo "<br>";
  $a++;
}
echo "<hr><br>";
$res = file("http://google.com");
/*foreach ($res as $key => $value) {
  echo $key;
  echo "    =    ";
  echo htmlspecialchars($value);
  echo "<br>";
}
*/
echo "SLAJD 3 <br><hr>";


echo "<table>";
for ($r=0; $r <11 ; $r++) {
  echo "<tr>";
   for ($d=0; $d<11 ; $d++) {
     echo "<td>";
     if ($d==0) {
       if (!$r==0) {echo "<span style='font-weight:bold'>".$r."</span>";}}
     else if($r==0){echo "<span style='font-weight:bold'>".$d."</span>";}
     else{echo ($d*$r);}
     echo "</td>";
   }
   echo "</tr>";
   }

?>





</body>
</html>
