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
    <a href="category-add.php">
        Add Category
    </a>
</div>
<?php
include "connection.php";

$q = "SELECT * FROM categories";

$data = mysqli_query($con,$q);

$total = mysqli_num_rows($data);

    ?>
<table width="100%">
    <tr>
        <th width="10%">Id</th>
        <th width="25%">Name</th>
        <th width="45%">Images</th>
        <th width="20%">Opration</th>
    </tr>

    <?php
        while ($row = mysqli_fetch_assoc($data)) {
            echo "<tr>
                    <td>".$row['cat_id']."</td>
                    <td>".$row['cat_name']."</td>
                    <td><img src= '".$row['cat_image']."' height='auto' width='200px'></td>
                    <td><a href='edit-category.php?cat_id=$row[cat_id]'>
                    <input type='submit' value='Update' class='update'></a>
                        <a href='delete-category.php?cat_id=$row[cat_id]'>
                        <input type='submit' value='Delete' class='delete' 
                        onclick = 'return checkdelete()' ></a>
                    </td>
                </tr>";
        }
        ?>

</table>

<!-- End table -->

</body>
</html>