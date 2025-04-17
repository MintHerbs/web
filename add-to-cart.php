<?php
session_start();
$id = $_GET['id'] ?? null;

if ($id) {
    $_SESSION['cart'][] = $id;
}
header("Location: products.php");
exit();
