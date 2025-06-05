<?php

include "connection.php";

    $cat_id = $_GET['cat_id'];

    $q = "DELETE FROM categories WHERE cat_id = '$cat_id' ";
    $data = mysqli_query($con, $q);

    if($data)
    {
        echo "Record Deleted Susseccfully";
    }
    else{
        echo "Faild To Delete";
    }

    ?>