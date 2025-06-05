<?php

session_start();

include "connection.php";

$cat_id = $_GET['cat_id'];

$q = "SELECT * FROM categories where cat_id=$cat_id";

$result = mysqli_query($con, $q);

$row = mysqli_fetch_assoc($result);

$cat_name = $row['cat_name'];
$cat_image = $row['cat_image'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Category</title>
    <link rel="stylesheet" href="CSS/category-add.css">
</head>

<body>

    <!-- Start Navbar -->

    <?php include "user-menu.php"; ?>

    <!-- End Navbar -->

    <!-- Start Profile -->

    <div class="container">
        <h2>Edit Category</h2>
        <div class="p"></div>
        <form action="update-category.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="cat_id" value="<?php echo $cat_id; ?>" />
            <label>
                Image
            </label>
            <img src='<?php echo $cat_image ?>' height='100px' width='100px'>
            <input type="file" name="cat_image" id="cat_image" />
            <label>
                Name
            </label>
            <input type="text" name="cat_name" value="<?php echo $cat_name; ?>" id="cat_name"
                placeholder="Enter Your Name" required />

            <div class="button">
                <button type="submit">Update</button>
            </div>

        </form>
    </div>

    <!-- End Profile Data -->

</body>

</html>