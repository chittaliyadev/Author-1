<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Table</title>
    <link rel="stylesheet" href="CSS/category.css">
</head>
<body>

<?php include "user-menu.php"; ?> 

<!-- start table -->

<div class="button">
    <a href="product-add.php">
        Add Product
    </a>
</div>
<?php
include "connection.php";

$q = "SELECT * FROM products";

$data = mysqli_query($con,$q);

$total = mysqli_num_rows($data);

    ?>
<table width="100%">
    <tr>
        <th width="10%">Id</th>
        <th width="15%">Name</th>
        <th width="15%">Price</th>
        <th width="30%">Details</th>
        <th width="15%">Images</th>
        <th width="25%">Opration</th>
    </tr>

    <?php
        while ($row = mysqli_fetch_assoc($data)) {
    ?>
           <?php echo "<tr>
                    <td>".$row['prod_id']."</td>
                    <td>".$row['prod_name']."</td>
                    <td>".$row['prod_price']."</td>
                    <td>".$row['prod_detail']."</td>
                    <td><img src= '".$row['prod_image']."' height='auto' width='200px'></td>
                    <td><a href='edit-product.php?prod_id=$row[prod_id]'>
                    <input type='submit' value='Update' class='update'></a>
                        <a href='delete-product.php?prod_id=$row[prod_id]'>
                        <input type='submit' value='Delete' class='delete' 
                        onclick = 'return checkdelete()' ></a>
                    </td>
                </tr>
                ";
        }
        ?>

</table>

<!-- End table -->

</body>
</html>