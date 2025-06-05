
<?php 

session_start();

include 'connection.php';

$user_id = $_SESSION['user']['user_id'];

$q = "SELECT c.*, p.prod_name, p.prod_image 
      FROM carts c 
      JOIN products p ON c.prod_id = p.prod_id 
      WHERE c.user_id = $user_id";

$res = mysqli_query($con,$q);

$row = mysqli_num_rows($res);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart</title>
    <link rel="stylesheet" href="CSS/category.css">
</head>
<body>

<header>
    <?php include 'visitor-menu.php' ?>
</header>


<table width="100%" border="1" cellspacing="0" cellpadding="10">
    <tr>
        <th width="10%">Image</th>
        <th width="15%">Name</th>
        <th width="15%">Qty</th>
        <th width="15%">Price</th>
        <th width="30%">Total</th>
        <th width="25%">Operation</th>
    </tr>
        <?php
         $grand_total = 0;
        while ($row = mysqli_fetch_assoc($res)) {
            $grand_total += $row['total'];
    ?>
       <?php echo "<tr>
                    <td><img src= '".$row['prod_image']."' height='auto' width='200px'></td>
                    <td>".$row['prod_name']."</td>
                    <td>".$row['qty']."</td>
                    <td>₹".$row['price']."</td>
                    <td>₹".$row['total']."</td>
                    <td>
                        <a href='delete-my-cart-p.php?prod_id=$row[prod_id]'>
                        <input type='submit' value='Delete' class='delete' 
                        onclick = 'return checkdelete()' ></a>
                    </td>
                </tr>";
        }
        ?>
        <tr>
            <td colspan='4' style='text-align: right; font-weight: bold;'>Total:</td>
            <td colspan="2" style="text-align: center;">₹<?php echo $grand_total ?></td>
        </tr>
</table>

</body>
</html>
