<?php
$text = <<< T
 ZSŁ - Zespół 
 Szkół 
 Łączności


T;
echo $text;
echo "<br>";
echo nl2br($text).'<br>';
$name ="jAnUsZ";
//zmiana na małe litery
$name = strtolower($name)."<br>";
echo $name;
//zmiana na duże litery
$name =strtoupper($name)."<br>";
echo $name;
//zmiana tylko pierwszej na dużą
$data= "jaNusZ kOwAlski";
echo ucfirst($data)."<br>";
echo $data;
$data= ucwords($data)."<br>";
echo $data;
$lorem = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam quos, exercitationem accusamus est earum quam corrupti? Neque aliquam labore, dolor, eum atque animi totam soluta odit, repudiandae quo veritatis nemo.";
echo "<hr>$lorem<hr>";
$col=wordwrap($lorem, 30,"<br>"); //zawijanie lini == Wordwrap(teks, ilośc znaków w lini, czym oddzielac)
echo "<hr>".$col."<hr>";
//czyszczenie zawartości buffora
ob_clean();
//usuwanie białych znaków
$name="Janusz";
$name1=" Janusz  ";
echo "Długość \$name: ".strlen($name)."<br>";
echo "Długość \$name: ".strlen($name1)."<br>";
echo "Długość \$name: ".strlen(ltrim($name1))."<br>"; //po lewej
echo ltrim($name1)."<br>";
echo "Długość \$name: ".strlen(rtrim($name1))."<br>"; //po prawej
echo rtrim($name1)."<br>";
echo "Długość \$name: ".strlen(trim($name1))."<br>"; // po obu stronach
//przeszukiwanie ciągu znaków
echo strstr("janusz.kowalski@gmail.com","@")."<br>"; //szukanie @ w stringu zwraca $gmail.com
echo strstr("janusz.kowalski@gmail.com","G")."<br>"; //szukanie dużego G zwraca nic
echo stristr("janusz.kowalski@gmail.com","G")."<br>";// szukanie jakiegokolwiek G zwraca gmail.com

$name="Janusz";
echo substr($name, 2)."<br>";//wyświetla "nusz"
echo substr($name, 2,3)."<br>";//wyświetla "nus"
echo substr($name, -2)."<br>";//wyświetla 2 ostatnie
echo substr($name, -2,1)."<br>";// drugi znak od końca
echo substr(strstr("janusz.kowalski@gmail.com", "@"),1)."<br>";

?>