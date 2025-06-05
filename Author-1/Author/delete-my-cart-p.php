<?php

include 'connection.php';

$c_id = $_GET['c_id'];

$q = "DELETE FROM products WHERE c_id = '$c_id'";

$res = mysqli_query($con, $q);

if ($res) {
    echo "Product deleted successfully.";
} else {
    echo "Failed to delete product.";
}

?>
