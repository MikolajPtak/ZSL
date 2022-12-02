<?php
require_once 'conn.php';

if (($_POST['login'])AND($_POST['loginrep'])) {
  if(($_POST['pass'])AND($_POST['passrep'])){
    $stmt = $dbConnection->prepare('INSERT INTO `users`(`login`,`pass`) VALUES (?,?)');
    $stmt->bind_param('ss', $_POST['login'],$_POST['pass']);
    $stmt->execute();

    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
        echo $row;
  }
}


}
 ?>
