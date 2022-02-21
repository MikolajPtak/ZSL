<?php
session_start();

if ($_POST["pass1"]!=$_POST["pass2"]) {
 $_SESSION['error']="Hasła są różne";
 header("location:../main/index.php");
}elseif ($_POST["mail1"]!=$_POST["mail2"]) {
  $_SESSION['error']="Maile są różne";
  header("location:../main/index.php");
}
require_once './connect.php';

$hashmethod=PASSWORD_DEFAULT;
$pass=password_hash($_POST["pass1"],$hashmethod);

$sql="INSERT INTO `users` (`id`, `mail`, `login`, `pass`, `creationdate`) VALUES (NULL, '$_POST[mail1]', '$_POST[login]', '$pass', current_timestamp()); ";
$result=$connect->query($sql);
header("location:../main/index.php");
?>
