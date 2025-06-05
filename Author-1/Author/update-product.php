<?php

session_start();

include "connection.php";

$prod_id = $_POST['prod_id'];
$prod_name = $_POST['prod_name'];
$prod_price = $_POST['prod_price'];
$prod_detail = $_POST['prod_detail'];

if ($_FILES['prod_image']['name'] != "") {

    $prod_image = "product-images/" . $_FILES['prod_image']['name'];
    move_uploaded_file($_FILES['prod_image']['tmp_name'], $prod_image);

    $q = "update products set prod_image='$prod_image' where prod_id=$prod_id";

    $res = mysqli_query($con, $q);

}

$q = "update products set prod_name='$prod_name',prod_price='$prod_price',prod_detail='$prod_detail' where prod_id=$prod_id";

$res = mysqli_query($con,$q);

if($res){
    echo "Product Updated Successfully";
}
else{
    echo "Fail Update";
}

?>