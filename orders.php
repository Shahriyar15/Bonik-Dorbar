<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: index.php");
    exit();
}
include 'db.php';
$result = $conn->query("SELECT * FROM orders");
echo "<h2>All Orders</h2><ul>";
while ($row = $result->fetch_assoc()) {
    echo "<li>Order ID: {$row['id']} - Product: {$row['product_name']} - Qty: {$row['quantity']}</li>";
}
echo "</ul>";