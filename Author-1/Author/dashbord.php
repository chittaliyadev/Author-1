
<?php session_start(); ?>


<?php
if(!isset($_SESSION['user'])){
    header("Location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord</title>
    <link rel="stylesheet" href="CSS/dashbord.css">
</head>

<body>

    <!-- Start Navbar -->

    <header>
    
    
    <?php include "user-menu.php"; ?>

    
    </header>

    <!-- End Navbar -->

    <!-- Start Main -->

    <div class="container">
        <h2>Welcome to coding world! <?php echo $_SESSION['user']['name'];  ?> </h2>
    </div>

    <!-- End Main -->

    <!-- Start Footer -->

    <footer>
        <p>Copy Right 2025</p>
    </footer>

    <!-- End Footer -->

</body>

</html>