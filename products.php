<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: index.php");
    exit();
}
include 'db.php';
$result = $conn->query("SELECT * FROM products");
echo "<h2>All Products</h2><ul>";
while ($row = $result->fetch_assoc()) {
    echo "<li>{$row['product_name']} - {$row['price']} TK</li>";
}
echo "</ul>";