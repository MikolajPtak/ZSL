<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


    <?php



    $i= 4;


    if (!($i%2)){
      echo "Liczba $i jest parzysta";
    }
    else {
      echo "Liczba $i nie jest parzysta";
    }
    echo "<br>";

    $a = 12;
    $b = 4;

    if (($a%$b)!=0) {
      echo "Liczba $a nie jest podzielna przez liczbę $b";
    }
    else {

    echo "Liczba $a jest podzielna przez liczbę $b";
}
echo "<br>";



    $c = -3;
    if ($c<0) {
      echo "$c jest mniejsze od zera";
    }
    elseif ($c==0) {
      echo "$c jest równe 0";
    }
    else {
      echo "$c jest większe od zera";
    }

    echo "<br>";


    $x=21;
    $y=14;
    $z=18;

    if ($x>$y) {
      if ($x>$z) {
        echo "$x jest największą liczbą";
      }
      elseif ($x<$z) {
        echo "$z jest największą liczbą";
      }
    }
    else {
      if ($y>$z) {
        echo "$y jest największą liczbą";
      }
      elseif ($y<$z) {
        echo "$z jest największą liczbą";
      }
    }
    echo "<br>";


    $dat = StrToTime("1988-10-20");


        if ((time()-$dat)>567647999){
          echo "Ta osoba jest pełnoletnia";
        }
        else {
          echo "Ta osoba nie jest pełnoletnia";
        }
        echo "<br>";

        $str="K";

      if (ctype_upper($str)) {
        echo "To duża litera";
      }
      elseif (ctype_lower($str)) {
        echo "to mała litera";
      }
      elseif (ctype_digit($str)) {
        echo "To cyfra";
      }
      else{
        echo "To inny znak";
      }



     ?>


  </body>
</html>
