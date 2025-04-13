<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: index.php");
    exit();
}
?>
<h2>Add Product</h2>
<form action="save_product.php" method="post" enctype="multipart/form-data">
    <input type="text" name="product_name" placeholder="Product Name" required><br>
    <textarea name="description" placeholder="Description"></textarea><br>
    <input type="number" name="price" placeholder="Price" required><br>
    <input type="file" name="image"><br>
    <button type="submit">Save Product</button>
</form>