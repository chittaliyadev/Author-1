<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category-Add</title>
    <link rel="stylesheet" href="CSS/category-add.css">
</head>
<body>

<!-- Start Category Add -->

<?php include 'user-menu.php'; ?>

<div class="container">
    <h2>Add Category</h2>
    <div class="p"></div>
    <form action="category-code.php" method="POST" enctype="multipart/form-data">
        <label for="image">
            Images
        </label>
        <input type="file" name="cat_image" id="cat_image">
        <label for="name">
            Name
        </label>
        <input type="text" name="cat_name" id="cat_name">
        <div class="button">
                <button type="submit">Submit</button>
            </div>
    </form>
</div>

<!-- End Category Add -->
    
</body>
</html>