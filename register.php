<?php include 'includes/header.php'; ?>

<a href='login.php' class ='btn btn-primary my-4'>Login</a>

<h1 class='text-center mt-3'>Register</h1>

    <form method="POST" action="includes/server.php" class='w-50 m-auto'>
      <div class="mb-3">
        <label  class="form-label">Name</label>
        <input type="text" class="form-control" name="name" required>
      </div>
      <div class="mb-3">
        <label  class="form-label">Email</label>
        <input type="email" class="form-control" name="email" required>
      </div>
      <div class="mb-3">
        <label  class="form-label">Password</label>
        <input type="password" class="form-control" name="password" required>
      </div>
      <div class="mb-3">
        <label  class="form-label">Confirm Password</label>
        <input type="password" class="form-control" name="password2" required>
      </div>
      <button type="submit" name="register" class="btn btn-danger w-100">Signup</button>
    </form>
  
<?php include 'includes/footer.php'; ?>