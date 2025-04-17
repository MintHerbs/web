<?php
session_start();
require 'db.php';

$result = $conn->query("SELECT * FROM products");

echo "<h2>Proizvodi</h2>";
while ($row = $result->fetch_assoc()) {
    echo "<div>";
    echo "proizvod"
    echo "</div>";
}
echo "<br><a href='cart.php'>Pogledaj korpu</a>";
?>
