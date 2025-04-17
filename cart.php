<?php
session_start();
require 'db.php';

$cart = $_SESSION['cart'] ?? [];

if (empty($cart)) {
    echo "Korpa je prazna.<br><a href='products.php'>Nazad na proizvode</a>";
    exit();
}

$ids = implode(',', array_map('intval', $cart));
$result = $conn->query("SELECT * FROM products WHERE id IN ($ids)");

echo "<h2>Korpa</h2>";
$total = 0;
while ($row = $result->fetch_assoc()) {
    echo "<div>{$row['name']} – {$row['price']} €</div>";
    $total += $row['price'];
}
echo "<p><strong>Ukupno: $total €</strong></p>";
echo "<form method='post' action='order.php'>
    <input type='submit' value='Naruci'>
</form>";
