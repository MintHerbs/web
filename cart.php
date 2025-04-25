<?php
session_start();
require 'db.php';

$cart = $_SESSION['cart'] ?? [];

if (empty($cart)) {
    echo "The cart is empty.<br><a href='products.php'>Back to products</a>";
    exit();
}

$ids = implode(',', array_map('intval', $cart));
$result = $conn->query("SELECT * FROM products WHERE id IN ($ids)");

echo "<h2>Cart</h2>";
$total = 0;
while ($row = $result->fetch_assoc()) {
