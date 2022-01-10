<?php
session_start();
   if((!empty($_POST['login']))&&(!empty($_POST['pass'])) ){
    $_SESSION["login"] = $_POST['login'];
    header("location:../sesja.php");
  }else{
    $_SESSION["error"]= "Wypełnij wszystkie pola";
    header("location:../login.php");
  }





?>
