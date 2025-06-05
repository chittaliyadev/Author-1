<?php

session_start();

include "connection.php";

$prod_id = $_GET['prod_id'];

$q = "select * from products where prod_id=$prod_id";

$result = mysqli_query($con, $q);

$row = mysqli_fetch_assoc($result);

$prod_name = $row['prod_name'];
$prod_price = $row['prod_price'];
$prod_detail = $row['prod_detail'];
$prod_image = $row['prod_image'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
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
        <form action="update-product.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="prod_id" value="<?php echo $prod_id; ?>" />
        
            <label>
                Name
            </label>
            <input type="text" name="prod_name" value="<?php echo $prod_name; ?>" id="prod_name"
                placeholder="Enter Your Name" required />
            <label>
                Price
            </label>
            <input type="text" name="prod_price" value="<?php echo $prod_price; ?>" id="prod_price"
                placeholder="Enter Your price" required />
            <label>
                Details
            </label>
            <textarea name="prod_detail" id="prod_detail" style="width: 315px; height: 100px;">
                <?php echo $prod_detail ?>
            </textarea>
            <label>
                Image
            </label>
            <img src='<?php echo $prod_image ?>' height='100px' width='100px'/>
            <input type="file" name="prod_image" id="prod_image" />

            

            <div class="button">
                <button type="submit">Update</button>
            </div>

        </form>
    </div>

    <!-- End Profile Data -->

</body>

</html>