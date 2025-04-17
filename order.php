<?php
session_start();
require 'db.php';

$cart = $_SESSION['cart'] ?? [];
$username = "anonimni"; // ili uzmi iz $_SESSION['username'] ako koristiš login

if (empty($cart)) {
    die("Korpa je prazna.");
}

$ids = implode(',', array_map('intval', $cart));
$result = $conn->query("SELECT * FROM products WHERE id IN ($ids)");

while ($row = $result->fetch_assoc()) {
    $stmt = $conn->prepare("INSERT INTO orders (username, product_name, price) VALUES (?, ?, ?)");
    $stmt->bind_param("ssd", $username, $row['name'], $row['price']);
    $stmt->execute();
    $stmt->close();
}

unset($_SESSION['cart']); // prazni korpu

echo "Hvala na kupovini, $username!<br>";
echo "<a href='products.php'>Nazad na proizvode</a>";
?>
