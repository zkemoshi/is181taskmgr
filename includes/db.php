<?php 
  $servername = 'localhost';
  $username = 'root';
  $password = '';
  $database_name = 'taskmanager';


  $connection = mysqli_connect($servername,$username,$password,$database_name);

  if(!$connection){
    echo "Dabatabse connection problem!";
  }

?>