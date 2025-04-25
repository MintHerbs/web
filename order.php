<?php
session_start();
require 'db.php';

$cart = $_SESSION['cart'] ?? [];
$username = "anonymous"; // or take from $_SESSION['username'] if using login

if (empty($cart)) {
    die("The cart is empty.");
}

$ids = implode(',', array_map('intval', $cart));
$result = $conn->query("SELECT * FROM products WHERE id IN ($ids)");

while ($row = $result->fetch_assoc()) {
    $stmt = $conn->prepare("INSERT INTO orders (username, product_name, price) VALUES (?, ?, ?)");
    $stmt->bind_param("ssd", $username, $row['name'], $row['price']);
    $stmt->execute();
    $stmt->close();
}

unset($_SESSION['cart']); // empty the cart

echo "Thank you for your purchase, $username!<br>";
echo "<a href='products.php'>Back to products</a>";
?>