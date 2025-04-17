<?php
require 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows === 1) {
    $stmt->bind_result($hashed_password);
    $stmt->fetch();

    if (password_verify($password, $hashed_password)) {
        echo "Dobrodošao, $username!";
        // session_start(); // za dalje
        // $_SESSION['username'] = $username;
    } else {
        echo "Pogrešna lozinka.";
    }
} else {
    echo "Korisnik ne postoji.";
}

$stmt->close();
$conn->close();
?>
