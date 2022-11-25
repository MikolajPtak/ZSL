<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>



    <?php
    $a=5;
    for ($i=0; $i <100 ; $i++) {
      echo $a;
      $a+=10;
      echo "<br>";
    }

    echo "<br><hr>";

    $x=10;
    $y=4;
    $z=2;
    $c=0;

    while ($y>0) {
      $c+=$x;
      $x-=$z;
      $y--;
    }
    echo $c;



echo "<br><hr>";

$n=30;
$X=3;
$Y=6;

while ($n>0) {
  echo $X;
  echo "<br>";
  $X+=$Y;
  $n--;
}

echo "<br><hr>";

$u=12;
$p=1;

while ($u>0) {
  $p*=$u;
  $u--;
}
echo $p;

     ?>

  </body>
</html>
