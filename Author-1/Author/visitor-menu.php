<nav>
      <ul>
        <li>
          <a href="index.php">
            Home
          </a>
        </li>
        
        <li>
          <a href="register.php">
            Register
          </a>
        </li>
        <li>
          <a href="products.php">
            Products
          </a>
        </li>
        <?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if(!isset($_SESSION['user'])){
  ?>
         <li>
          <a href="login.php">
            Login
          </a>
        </li>
        <?php
}
else
{
?>
       <li>
      <a href="profile.php">
        Profile
      </a>
    </li>
        <li>
          <a href="my-cart.php">
            My Cart
          </a>
        </li>
        <li>
          <a href="myorder.php">
            My Order
          </a>
        </li>
        <li>
          <a href="logout.php">
            Logout
          </a>
        </li>
<?php
}
?>
      </ul>
    </nav>