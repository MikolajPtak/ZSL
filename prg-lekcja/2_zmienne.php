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
?>