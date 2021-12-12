<?php
if(!empty($_GET['DELETEuser'])) {
   //echo $_GET['DELETEuser'];
  require_once './connect.php';
  $sql="DELETE FROM user WHERE user.id=$_GET[DELETEuser]";
  $connect ->query($sql);
  if($connect->affected_rows){
    header("location:.\db_1.php?error=Prawidłowo usunięto rekord o id=$_GET[DELETEuser]");
  }else{
    header('location:.\db_1.php?error=Nie usunięto rekordu');
  }
}else{
  header("location:.\db_1.php");

}
echo '<a href=".\db_1.php">działa</a>'
?>
