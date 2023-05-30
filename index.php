<?php
session_start();

$userId = $_SESSION['userId'];
$name = $_SESSION['name'];

include "includes/header.php"; 
include "includes/db.php";

?>

<h4 class='text-center'>User <?php echo $name ?></h4>

  <a href='addtask.php' class ='btn btn-primary my-4'>Add Task</a>
  <a href='login.php' class ='btn btn-secondary my-4'>Log Out</a>

  <table class='table table-bordered'>
    <thead>
      <tr>
        <th>#</th>
        <th>name</th>
        <th>Status</th>  
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>

    <?php 
      $sql = "SELECT * FROM task Where userId='$userId'";

      $result = mysqli_query($connection, $sql);
      $num= 0;
      if($result){
        while($row = mysqli_fetch_assoc($result)){
          $id = $row["id"];
          $name = $row["name"];
          $status = $row["status"] == 0 ? "Incomplete":"completed";
          $num++;

          echo "
          <tr>
          <td>$num</td>
          <td>$name</td>
          <td>$status</td>
          <td>
            <a href='edit.php?editid=".$id."' class='btn btn-success'>Edit</a>
            <a href='delete.php?deleteid=".$id."' class='btn btn-danger'>Delete</a>
          </td>
        </tr>
          ";
          
        }
        
      } else {
        echo "No result found!";
      }
    
    ?>
      
     
    </tbody>
  </table>

<?php include 'includes/footer.php'; ?>
