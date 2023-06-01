<?php
 include 'includes/protect.php';

$userId = $_SESSION['userId'];
$name = $_SESSION['name'];
$email = $_SESSION['email'];


include "includes/header.php";  ?>

<div class="text-center">
  <h4>Welcome, <?php echo $name ?></h4>
  <small>( <?php echo "$email" ?>)</small>
</div>

<a href='index.php' class ='btn btn-primary my-4'>Go Back</a>

    <h1 class='text-center mt-5'>Add Task</h1>

    <form method="POST" action="includes/server.php" class='w-50 m-auto'>
      <div class="mb-3">
        <label  class="form-label">Task Name</label>
        <input type="text" class="form-control" name="name">

        <input type="hidden"  name="userId" value=' <?php echo $userId ; ?> ' />
      </div>
      
      <button type="submit" name="addTask" class="btn btn-danger w-100">Add</button>
    </form>
  
  <?php include 'includes/footer.php'; ?>
  