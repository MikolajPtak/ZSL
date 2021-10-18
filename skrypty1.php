<?php
 if (!empty($_POST['name'])) {
    require_once '../funkcje/funkcja1.php';
    echo test();
    echo "Imię: ".name($_POST['name']);
    echo "<br>";
    echo validatestring($_POST['name'],$_POST['znak']);
 }
 ?>
