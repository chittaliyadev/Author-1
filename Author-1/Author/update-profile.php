<?php

session_start();

include 'connection.php';

$name = $_POST['name'];
$contact = $_POST['contact'];
$gender = $_POST['gender'];
$user_id = $_SESSION['user']['user_id'];

$q = "update users set name='$name',contact='$contact',gender='$gender' where user_id=$user_id";

$res = mysqli_query($con,$q);

if($res)
{
    echo"Profile update successfully";
}
else
{
    echo"Fil to update";    
}

?>