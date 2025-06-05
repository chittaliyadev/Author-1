<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="CSS/login.css">
</head>

<body>

    <!-- Start Nav -->

  <header>

  <?php include "visitor-menu.php"; ?>

  
  </header>

  <!-- End Nav -->

  <!-- Start Login -->

  <div class="container">

    <h2>Login</h2>
    <div class="p"></div>

    <form action="login-check.php" method="POST">

      <div class="group">
        <label for="email">Email</label>
        <input type="email" placeholder="Enter Email" id="email" name="email" >
      </div>

      <div class="group">
        <label for="pwd">Password</label>
        <input type="password" placeholder="Enter Password" id="password" name="password" required>
      </div>

      <div class="button">
        <button>Submit</button>
      </div>

      <div class="forget">
        <a href="forget-pwd.php">
          Forget Password
        </a>
      </div>

    </form>

  </div>

  <!-- End Login -->

</body>

</html>