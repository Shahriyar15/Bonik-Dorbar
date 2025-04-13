<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: index.php");
    exit();
}
?>
<h2>Welcome, <?php echo $_SESSION['admin']; ?></h2>
<ul>
    <li><a href="add_product.php">Add Product</a></li>
    <li><a href="products.php">View Products</a></li>
    <li><a href="orders.php">Manage Orders</a></li>
    <li><a href="logout.php">Logout</a></li>
</ul>