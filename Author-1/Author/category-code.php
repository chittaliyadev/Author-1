<?php

session_start();

include 'connection.php';

$cat_name = $_POST['cat_name'];

$cat_image = "category-images/" . $_FILES['cat_image']['name'];
move_uploaded_file($_FILES['cat_image']['tmp_name'],$cat_image);

$q = "insert into categories (cat_image,cat_name) values ('$cat_image','$cat_name')";

$res = mysqli_query($con,$q);

if($res)
{
    echo"Category added successfully";
}
else
{
    echo"Fil to update";    
}

?>