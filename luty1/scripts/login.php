<?php
require_once 'connect.php';
$sql="SELECT pass FROM users WHERE login=$_POST[]";
$result=$connect->query($sql);

 ?>
