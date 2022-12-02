<?php
require_once 'conn.php';
$login= $_POST['login']
$pass = $_POST['pass']

$res = $conn->query($sql);

$stmt = $dbConnection->prepare("SELECT `pass` FROM `users` WHERE `login`= ?");
$stmt->bind_param('s', $login);
$stmt->execute();

$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
    // Do something with $row
 ?>
