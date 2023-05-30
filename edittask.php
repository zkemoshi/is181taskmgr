<?php include "includes/header.php";  ?>

<a href='index.php' class ='btn btn-primary my-4'>Back</a>

    <h1 class='text-center mt-5'>Edit Task</h1>

    <form method="POST" action="" class='w-50 m-auto'>
      <div class="mb-3">
        <label  class="form-label">Task Name</label>
        <input type="text" class="form-control" name="name">
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" name="check" >
        <label class="form-check-label" >
          Completed
        </label>
      </div>
      
      <button type="submit" name="editTask" class="btn btn-danger w-100">Update Task</button>
    </form>
  
  <?php include 'includes/footer.php'; ?>
  