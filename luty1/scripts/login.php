<?php
require_once 'connect.php';
$sql='SELECT pass FROM users WHERE login=`$_POST[login]`';
$result=$connect->query($sql);
if (!empty($connect->affected_rows)) {
  echo "dziala";
}
echo $result;
echo "dziala?";

 ?>
