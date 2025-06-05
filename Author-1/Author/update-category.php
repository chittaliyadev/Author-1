<?php
session_start();

include "connection.php";

$cat_id = $_POST['cat_id'];
$cat_name = $_POST['cat_name'];

if ($_FILES['cat_image']['name'] != "") {

    $cat_image = "category-images/" . $_FILES['cat_image']['name'];
    move_uploaded_file($_FILES['cat_image']['tmp_name'], $cat_image);

    $q = "update categories set cat_image='$cat_image' where cat_id='$cat_id'";
    
    $res = mysqli_query($con, $q);

}

$q = "update categories set cat_name='$cat_name' where cat_id=$cat_id";
$res = mysqli_query($con, $q);

if ($res) {
    echo "Category Image and Name Update successfully";
} else {
    echo "Fil to update";
}

?>