<?php 

include('connection.php');

$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$gender = $_POST['gender'];
$password = $_POST['password'];

$q = "insert into users(name,email,contact,gender,password)
    values('$name','$email','$contact','$gender','$password')";

    $res = mysqli_query($con,$q);

    if($res)
    {
        echo"Register sucessfully";
    }
    else
    {
        echo"Fil to register";
    }

?>