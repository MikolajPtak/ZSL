<?php
if(!empty($_GET['DELETEcity'])){
  $sql="DELETE FROM cities WHERE cities.city_ID=$_GET[DELETEcity]";
  $connect = new mysqli("localhost", "root", "", "miasta");
  $connect ->query($sql);
  if($connect->affected_rows){
    header("location:.\BD_miasta.php?error=Prawidłowo usunięto rekord o id=$_GET[DELETEcity]");
  }else{
    header('location:.\BD_miasta.php?error=Nie usunięto rekordu');
  }
}else{
  header("location:.\BD_miasta.php");
}
