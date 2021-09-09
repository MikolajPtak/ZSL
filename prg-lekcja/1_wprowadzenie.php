<?php
 echo 'ZSŁ<br>';
 echo 'ZSŁ<hr>';
//apostrof a cudzysłów
 $name="Janusz";
 echo 'Imie: $name<br>';
 echo "Imie: $name<br>";
//konkatenacja
 echo "Janusz"."Kowalski<br>";

 //typy danych
 //całkowity
 $whole=10;
 $bin=0b101; //5
 $oct=011;//9
 $hex=0x11;//17
 echo $hex."<br>";

 //zmiennoprzecinkowy
 $x=10.5;

 //logiczny
 $true=true;
 $false=false;
 echo $true;
// w nazwach zmiennych możemy, ale nie zaleca się używać polskich znaków
//składnia heredoc
echo <<< E
<hr>Twoje imię: $name<br>
Poznań<br>
ZSŁ<hr>
E;
//heredoc jako zmienna
$text = <<< b
<hr>Twoje imię: $name<br>
Poznań<br>
ZSŁ<hr>
b;
echo $text;
//nowdoc
echo <<< 'E'
<hr>Twoje imię: $name<br>
Poznań<br>
ZSŁ<hr>
E;

$surname="Nowak";
echo "\$name $surname";//$name Nowak



 ?>