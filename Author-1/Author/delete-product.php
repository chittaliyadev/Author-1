<?php

include 'connection.php';

$prod_id = $_GET['prod_id'];

$q = "delete from products where prod_id=$prod_id";

$res = mysqli_query($con,$q);

if($res){
    echo "Product Delete Successfully";
}
else{
    echo "Faild To Delete";
}

?>