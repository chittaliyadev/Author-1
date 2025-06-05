<?php 
session_start();


if(!isset($_SESSION['user'])){
    header("Location:login.php");
}
 

$profile_pic =$_SESSION['user']['profile_pic'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Pic</title>
    <link rel="stylesheet" href="CSS/profilepic.css">
</head>
<body>

    
<!-- Start Navbar -->

    <header>
        
    <?php include "user-menu.php"; ?>

    </header>

    <!-- End Navbar -->

    <div class="container">
        <form action="profile-pic-update.php" method="POST" enctype="multipart/form-data" >
            <img 
                src="<?php echo $profile_pic;?>" 
                alt="" 
                style="
                    width:200px;
                    height:200px;
                    border-radius:50%;
                    border:1px solid #fff;
                    box-shadow:2px 2px 25px 0px"
            >
        <div class="change">
            <input type="file" name="profile_pic" id="profile_pic" />
        </div>
            <button type="submit">  
                Update
            </button>
        </form>
    </div>

    <!-- End Profile -->
    
</body>
</html>