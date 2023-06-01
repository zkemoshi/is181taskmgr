<?php
 include 'includes/protect.php';


// $id = '';
// $taskname = '';

$userId = $_SESSION['userId'];
$name = $_SESSION['name'];
$email = $_SESSION['email'];

include "includes/header.php"; 
include "includes/db.php";

if(isset($_GET['edittaskid'])){
  $id = $_GET['edittaskid'];
  $taskname = $_GET['taskname'];
  $status = $_GET['status'];
}

?>
<a href='index.php' class ='btn btn-primary my-4'>Back</a>

    <h1 class='text-center mt-5'>Edit Task</h1>

    <form method="POST" action="includes/server.php" class='w-50 m-auto'>
      <input type="hidden" value="<?php echo $id ; ?>" name="taskId" >
      <div class="mb-3">
        <label  class="form-label">Task Name</label>
        <input type="text" class="form-control" name="name" value="<?php echo "$taskname"; ?>">
      </div>
      <div class="form-check">
        <?php if ($status == 'Incomplete') { ?>
            <input class="form-check-input" type="checkbox" value="completed" name="completed" />
        <?php } else { ?>
            <input class="form-check-input" type="checkbox" value="completed" name="completed" checked />
        <?php } ?>

        <label class="form-check-label">
            Completed
        </label>
      </div>

      
      <button type="submit" name="editTask" class="btn btn-danger w-100">Update Task</button>
    </form>
  
  <?php include 'includes/footer.php'; ?>
  