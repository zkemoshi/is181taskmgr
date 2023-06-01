<?php
 include 'includes/protect.php';

$userId = $_SESSION['userId'];
$name = $_SESSION['name'];
$email = $_SESSION['email'];

include "includes/header.php"; 
include "includes/db.php";

?>
<div class="text-center">
  <h4>Welcome, <?php echo $name ?></h4>
  <small>( <?php echo "$email" ?>)</small>
</div>

  <a href='addtask.php' class ='btn btn-primary my-4'>Add Task</a>
  <a href='includes/server.php?logout=1' class ='btn btn-secondary my-4'>Log Out</a>

  <table class='table table-bordered table-responsive table-hover'>
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
            <a href='edittask.php?edittaskid=".$id."&taskname=".$name ."&status=".$status ."' class='btn btn-success'>Edit</a>
            <a href='includes/server.php?deletetaskid=".$id."' class='btn btn-danger'>Delete</a>
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
