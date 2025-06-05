<?php

session_start();

include 'connection.php';

$prod_name = $_POST['prod_name'];
$prod_price = $_POST['prod_price'];
$prod_detail = $_POST['prod_detail'];
$cat_id = $_POST['cat_id'];

$prod_image = "product-images/" . $_FILES['prod_image']['name'];
move_uploaded_file($_FILES['prod_image']['tmp_name'],$prod_image);

$q = "INSERT INTO products ( prod_name, prod_price, prod_detail, prod_image, cat_id) VALUES ('$prod_name','$prod_price','$prod_detail','$prod_image','$cat_id')";

$res = mysqli_query($con,$q);


if($res)
{
    echo"Product added successfully";
}
else
{
    echo"Fil to update";    
}


?>