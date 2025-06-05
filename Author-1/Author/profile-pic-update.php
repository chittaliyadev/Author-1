<?php

session_start();
include "connection.php";
$user_id = $_SESSION['user']['user_id'];

$profile_pic ="profile-images/" . $_FILES['profile_pic']['name'];
move_uploaded_file($_FILES['profile_pic']['tmp_name'],$profile_pic);

$q = "update users set profile_pic='$profile_pic' where user_id=$user_id";
$_SESSION['user']['profile_pic']= $profile_pic;

$res = mysqli_query($con,$q);

if($res)
{
    echo"Profile picture successfully";
}
else
{
    echo"Fil to update";    
}

?>