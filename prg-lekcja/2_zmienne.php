<?php
echo PHP_VERSION."<br>";
echo 2**10,"<br>";

$x=10;
$y=1;
echo $x<=>$y; //x>y=1 x=y =0  x<y=-1

$x=1;
$y=1.0;
echo gettype($x); //integer
echo gettype($y); //double


if ($x==$y) {
    echo "równe";
}
else {
    echo "różne"
}
echo "<br>"
if ($x===$y) {
    echo "identyczne";
}
else {
    echo "różne"
}
echo "<br>"

$x=2
echo ++$x; //3 preinkrementacja
echo $x++; //3 postinkrementacja
echo ++$x; //5 ++$x najpierw modyfikuje, potem wyświetla

$x=1;
echo $x;//1
$x=$x++;//przypisje x=1 a potem zwiększa x o 1, ale kiedy zwiększasz tą samą zmienną to pomijamy postinkrementację
echo $x;//1
$x=++$x;// dodaje 
echo $x;//2
$y=++$x;
echo $x;//3
echo $y;//3
$y=$x++;
echo $x;//4
echo "$y<br>";//3 
?>