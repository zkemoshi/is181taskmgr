<?php include 'includes/header.php'; ?>

<a href='register.php' class ='btn btn-primary my-4'>Register</a>

<h1 class='text-center mt-5'>Login</h1>

    <form method="POST" action="includes/server.php" class='w-50 m-auto'>
      
      <div class="mb-3">
        <label  class="form-label">Email</label>
        <input type="email" class="form-control" name="email">
      </div>
      <div class="mb-3">
        <label  class="form-label">Password</label>
        <input type="password" class="form-control" name="password">
      </div>
      <button type="submit" name="login" class="btn btn-danger w-100">Sign In</button>
    </form>
  
<?php include 'includes/footer.php'; ?>