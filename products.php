<?php
session_start();
require 'db.php';

$result = $conn->query("SELECT * FROM products");

echo "<h2>Products</h2>";
while ($row = $result->fetch_assoc()) {
    echo "<div>";
    echo "product";
    echo "</div>";
}
echo "<br><a href='cart.php'>View cart</a>";
?>