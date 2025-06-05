<?php

session_start();
include "connection.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product-Add</title>
    <link rel="stylesheet" href="CSS/category-add.css">
</head>
<body>

<!-- Start Category Add -->

<?php include "user-menu.php"; ?>

<div class="container">
    <h2>Add Product</h2>
    <div class="p"></div>
    <form action="product-code.php" method="POST" enctype="multipart/form-data">
        <label for="image">
            Images
        </label>
        <input type="file" name="prod_image" id="prod_image">
        <label for="name">
            Name
        </label>
        <input type="text" name="prod_name" id="prod_name">
        <label for="price">
            Price
        </label>
        <input type="text" name="prod_price" id="prod_price">
        <label for="details">
            Details
        </label>
        
        <textarea name="prod_detail" id="prod_detail" style="width: 315px; height: 100px;"></textarea>
       
         <label for="details">
            Category
        </label>
        
        <select name="cat_id">
                <?php 
                    $qcat = "SELECT  * FROM categories";
                    $data = mysqli_query($con,$qcat);
                while ($row = mysqli_fetch_assoc($data)) {
                    ?>  
                    <option value="<?php echo $row['cat_id']; ?>"> 
                        <?php echo $row['cat_name']; ?>
                    </option>;
                <?php 
                }
                ?>
 

        </select>
        
        
        <div class="button">
            <button type="submit">Submit</button>
        </div>
    </form>
</div>

<!-- End Category Add -->
    
</body>
</html>