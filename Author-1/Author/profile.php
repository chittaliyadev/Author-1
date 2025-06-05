<?php

session_start();
if(!isset($_SESSION['user'])){
    header("Location:login.php");
}

$name = $_SESSION['user']['name'];
$email = $_SESSION['user']['email'];
$contact = $_SESSION['user']['contact'];
$gender = $_SESSION['user']['gender'];
$user_id = $_SESSION['user']['user_id'];
$profile_pic =$_SESSION['user']['profile_pic'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="CSS/profile.css">
</head>

<body>

    <!-- Start Navbar -->

    <header>
       
    <?php include "user-menu.php"; ?>

    </header>

    <!-- End Navbar -->

    <!-- Start Profile -->

    <div class="container">
        <div class="images">
                <img 
                    src="<?php echo $profile_pic;?>" 
                    alt="" 
                    style="
                        width:200px;
                        height:200px;
                        border:1px solid #fff;
                        box-shadow:2px 2px 25px 0px"
                >
      
        </div>
        <div class="change">
            <button>
                <a href="profile-pic.php">
                    Change Photo
                </a>
            </button>
        </div>
    </div>

    <!-- End Profile -->

    <!-- Start Profile Data -->

    <div class="container1">
        <form action="update-profile.php" method="POST">

            <div class="group">
                <label for="name">
                    Name
                </label>
                <input  
                        type="text" 
                        id="name" 
                        name="name" 
                        placeholder="Enter Your Name" required 
                        value="<?php echo $name ?>"
                >
            </div>

            <div class="group">
                <label for="Email">
                    Email
                </label>
                <input  
                        type="email" 
                        id="email"  
                        name="email" 
                        placeholder="Enter Your Email" required 
                        value="<?php echo $email ?>"
                >
            </div>

            <div class="group">
                <label for="contact">
                    Contect
                </label>
                <input  
                        type="contact" 
                        id="contact" 
                        name="contact" 
                        placeholder="Enter Your Number" required 
                        value="<?php echo $contact ?>"
                >
            </div>

            <div class="group">
                <label for="cpwd">
                    Gender
                </label>
                <label>
                    <input  
                        type="radio" 
                            name="gender" 
                            value="male" 
                            value="<?php echo $gender ?>"
                    > 
                    Male
                    </label>
                <label>
                    <input 
                        type="radio" 
                        name="gender" 
                        value="female" 
                        vlaue="<?php echo $gender ?>"
                    > 
                    Female
                </label>
            </div>

            <div class="button">
                <button>Update</button>
            </div>

            <div class="change">
                <p>
                    <a href="change-pwd.php">Change Password</a>
                </p>
            </div>
    </div>

    <!-- End Profile Data -->

    <!-- Start Footer -->

    <footer>
        <p>Copy Right 2025</p>
    </footer>

    <!-- End Footer -->

</body>

</html>