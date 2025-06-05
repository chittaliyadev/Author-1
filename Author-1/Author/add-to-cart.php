<?php 

session_start();

if(!isset($_SESSION['user'])){
    header("Location:login.php");
}

include 'connection.php';

$user_id = $_SESSION['user']['user_id'];
$prod_id = $_POST['prod_id'];
$price = $_POST['prod_price'];
$qty = $_POST['qty'];
$total = $qty * $price;

$q = "insert into carts (user_id,prod_id,qty,price,total) values ('$user_id','$prod_id','$qty','$price','$total')";

$res = mysqli_query($con,$q);

if($res)
{
    echo "<script>
            alert('Product Add To Cart Successfully')
        </script>";
}
else
{
    echo "Fail Add To Cart.";
}

?>