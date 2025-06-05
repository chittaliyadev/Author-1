<?php

session_start();

include 'connection.php';

$confirm_password = $_POST['confirm_password'];
$new_password = $_POST['new_password'];
$old_password = $_POST['old_password'];
$user_id = $_SESSION['user']['user_id'];

if($new_password == $confirm_password)
{

$q = "update users set password='$new_password' where 
password='$old_password' and user_id=$user_id";

$pass = mysqli_query($con,$q);
    echo"Password update successfully";
}
else 
{
    echo"The password dose not match.";
}

?>