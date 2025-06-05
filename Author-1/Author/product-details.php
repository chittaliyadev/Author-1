<?php include 'header.php'; ?>

<?php

include "connection.php";

$prod_id = $_GET['prod_id'];

$q = "SELECT * FROM products WHERE prod_id = $prod_id";
$res = mysqli_query($con, $q);

$row = mysqli_fetch_assoc($res);
?>

<style>
    .product-image {
        max-height: 400px;
        object-fit: contain;
    }
</style>

<div class="container1">
    <div class="i">
        <input type="hidden" name="prod_id" id="prod_id" value="<?php echo $row['prod_id'] ?>">
        <img src="<?php echo $row['prod_image'] ?>" alt="">
        <h3><?php echo $row['prod_name'] ?></h3>
        <p><?php echo $row['prod_detail'] ?></p>
        <h3><?php echo $row['prod_price'] ?></h3>
        <form action="add-to-cart.php" method="POST">
            <div class="group">
                <input type="hidden" name="prod_id" id="prod_id" value="<?php echo $row['prod_id']; ?>">
                <input type="hidden" name="prod_price" id="prod_price" value="<?php echo $row['prod_price']; ?>">
                <label>
                    Quantity
                </label>
                <input type="number" name="qty" id="qty" value="1" min="1" required>
            </div>
        
        <div class="btn">
            <a href="add-to-cart.php">
                <button type="submit">
                    Add To Cart
                </button>
            </a>
        </div>
        </form>
    </div>
</div>


<?php include('footer.php'); ?>