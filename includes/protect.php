<?php 
session_start();

if(!$_SESSION['userId']){
  session_destroy();
  header('location:login.php');
}

?>