<?php

include "connection.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>

    <!-- Start Nav -->

    <header>
        <?php include "visitor-menu.php"; ?>
    </header>

    <!-- End Nav -->

    <!-- Start Products -->

    <div class="sele">
        <form method="get" action="">
            <select name="cat_id" onchange="this.form.submit()">
                <option value="" disabled selected>-- Select Category --</option>
                <?php
                $qcat = "SELECT  * FROM categories";
                $cat = mysqli_query($con, $qcat);
                while ($row = mysqli_fetch_assoc($cat)) {

                    $selected = (isset($_GET['cat_id']) && $_GET['cat_id'] == $row['cat_id']) ? 'selected' : '';
                    echo "<option value='{$row['cat_id']}' $selected>{$row['cat_name']}</option>";
                }
                ?>
            </select>
        </form>
    </div>

    <?php
    $cat_id = isset($_GET['cat_id']) ? $_GET['cat_id'] : '';
    ?>


    <div class="container">
        <div class="small-container">
            <div class="row">
                <?php

                if ($cat_id) {
                    $q = "SELECT * FROM products WHERE cat_id = $cat_id";
                } else {
                    $q = "SELECT * FROM products"; 
                }
                $data = mysqli_query($con, $q);

                while ($row = mysqli_fetch_assoc($data)) {
                    ?>
                    <div class="col">
                        <img src="<?php echo $row['prod_image']; ?>" name="prod_image" id="prod_image" alt="">
                        <div class="dit">
                            <h3><?php echo $row['prod_name']; ?></h3>
                            <p><?php echo $row['prod_detail']; ?></p>
                            <h3><?php echo $row['prod_price']; ?></h3>
                        </div>
                        <a href="product-details.php?prod_id=<?php echo $row['prod_id']; ?>" class="view">View</a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <!-- End Products -->

    <!-- Start Footer -->

    <?php include "footer.php" ?>

    <!-- End Footer -->

</body>

</html>