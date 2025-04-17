<?php
require 'db.php';

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // bezbedno

$stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $password);

if ($stmt->execute()) {
    echo "Uspešna registracija! <a href='login.php'>Prijavi se</a>";
} else {
    echo "Greška: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
