<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="CSS/register.css">
</head>

<body>

    <!-- Start Nav -->

  <header>
   
  
  <?php include "visitor-menu.php"; ?>

  
  </header>

  <!-- End Nav -->

    <!-- Start Register -->

    <div class="container">

        <h2>Register</h2>
        <div class="p"></div>

        <form action="registre-code.php" method="POST">

            <div class="group">
                <label for="name">Name</label>
                <input type="text" placeholder="Enter Your Name" id="name" name="name" required>
            </div>

            <div class="group">
                <label for="Email">Email</label>
                <input type="email" placeholder="Enter Your Email" id="email" name="email" required>
            </div>

            <div class="group">
                <label for="number">Contect</label>
                <input type="number" placeholder="Enter Your Number" id="contact" name="contact" required>
            </div>

            <div class="group">
                <label for="gender">Gender</label>
                <label><input type="radio" name="gender" value="male" id="gender"> Male</label>
                <label><input type="radio" name="gender" value="female" id="gender"> Female</label>
            </div>

            <div class="group">
                <label for="pwd">Password</label>
                <input type="password" placeholder="Enter Password" id="password" name="password" required>
            </div>

            <div class="button">
                <button>Submit</button>
            </div>

        </form>

    </div>

    <!-- End Register -->

</body>

</html>