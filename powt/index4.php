<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


<?php

for ($i=1; $i <11 ; $i++) {
  echo $i;
  echo "<br>";
}

echo "<br><hr>";

for ($d=10; $d >0 ; $d--) {
  echo $d;
  echo "<br>";
}
echo "<br><hr>";
$wyn= 0;
for ($i=1; $i <11 ; $i++) {
  $wyn+=$i;
}
echo $wyn;
echo "<br><hr>";
$c=2;
for ($h=0; $h <10 ; $h++) {
  echo $c;
  echo "<br>";
  $c+=2;
}
echo "<br><hr>";

$x=2;
$y=100;
$k=0;
for ($o=0; $o<$x; $o++) {
  $k=$y+$k;
  $k*=1.08;
}
echo $k."zł";




 ?>



  </body>
</html>
