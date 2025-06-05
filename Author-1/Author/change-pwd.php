<?php

session_start();

if(!isset($_SESSION['user'])){
    header("Location:login.php");
}

$password = $_SESSION['user']['password'];
$user_id = $_SESSION['user']['user_id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="CSS/changepwd.css">
</head>
<body>
    
<!-- Start Navbar -->

    <header>
    
    
    <?php include "user-menu.php"; ?>

    
    </header>

    <!-- End Navbar -->

     <!-- Start Forget -->

    <div class="container">

        <h2>Change Password</h2>
        <div class="p"></div>

        <form action="update-pwd.php" method="POST">

            <div class="group">
                <label for="Password">Old Password</label>
                <input type="password" id="old_password" name="old_password" placeholder="Enter Old Password" <?php echo $password ?> required>
            </div>

            <div class="group">
                <label for="Password">New Password</label>
                <input type="password" id="new_password" name="new_password" placeholder="Enter New Password" required>
            </div>

            <div class="group">
                <label for="Password">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Enter Confirm Password" >
            </div>

            <div class="button">
                <button>Submit</button>
            </div>

        </form>

    </div>

    <!-- End Forget -->

</body>

</html>

</body>
</html>