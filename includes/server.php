<?php 
include 'db.php';
session_start();

// Registration
if(isset($_POST['register'])){
   
  // get data from from to variables
   $name = $_POST['name'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $password2 = $_POST['password2'];

   
  // Check if password confirmed
  if($password != $password2){
    echo "password not equal";
  }else {
    // Check if user exist
    $sql = "SELECT * FROM user WHERE email='$email'";

    // query the db
    $check_result = mysqli_query($connection, $sql);
    
    // check if the result has something
    $num_rows = mysqli_num_rows($check_result); 

    if($num_rows>0){
      echo "User already exist";
    }else {
      
      // Send data to database
      $sql = "INSERT INTO user (name,password,email) VALUES ('$name','$password','$email')";

      // Execute the query
      $result = mysqli_query($connection, $sql);

      if($result){     
        header('location:../login.php');
        
      }else {
        echo "data not added to database";
      }
    }

    
  }
 
}


// Login 
if(isset($_POST['login'])){
  // get data from from to variables
  $email = $_POST['email'];
  $password = $_POST['password'];

  echo "inside";
  // Check credential
  $sql = "SELECT * FROM user WHERE email='$email'";

  $check_result = mysqli_query($connection, $sql);
  $num_rows = mysqli_num_rows($check_result); 

  if($num_rows > 0){
    $row = mysqli_fetch_assoc($check_result);
    $db_password = $row['password'];
    $db_email = $row['email'];
    $db_name = $row['name'];
    $userId = $row['id'];

      if($password != $db_password){
        echo "Invalid Credential pawd";
      }else {
          $_SESSION['name'] = $db_name;
          $_SESSION['email'] = $db_email;
          $_SESSION['userId'] = $userId;
          header('location:../index.php');
      }
  }else {
    echo "invalide credential email";
  }
  
}


// Viewing Tasks - Index


// Adding Tasks - Addtask
if(isset($_POST['addTask'])){
   
  // get data from from to variables
   $name = $_POST['name'];
   $userId = $_POST['userId'];
   
   echo "$name, $userId";
 
      // Send data to database
      $sql = "INSERT INTO task (name,userId) VALUES ('$name','$userId')";

      // Execute the query
      $result = mysqli_query($connection, $sql);

      if($result){     
        header('location:../index.php');
        
      }else {
        echo "NO task added";
      }
   
}


// Updating Task --- Update Task
if(isset($_POST['editTask'])){
  // check for complete or not completion selection
  $status = $_POST['completed'] == 'completed' ? 1 : 0;

  // Get other data name and hidded id
  $id = intval($_POST['taskId']);
  $name = $_POST['name'];


  $sql = "UPDATE task SET name='$name', status='$status' WHERE id='$id'";

    // Execute the query
    $result = mysqli_query($connection, $sql);

    if($result){     
      header('location:../index.php');
      
    }else {
      echo "data not updated to database";
    }

}


// Delete Task
if(isset($_GET['deletetaskid'])){

  $id = $_GET['deletetaskid'];

  $sql = "DELETE FROM task WHERE id='$id'";
  
  $result = mysqli_query($connection, $sql);

  if($result){
    header('location:../index.php');
  }else {
    echo "Item not deleted!";
  }
}

// Logout 
if(isset($_GET['logout'])){
  session_destroy();
  header('location:../login.php');
}

