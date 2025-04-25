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
        echo "Welcome, $username!";
        // session_start(); // for further usage
        // $_SESSION['username'] = $username;
    } else {
        echo "Incorrect password.";
    }
} else {
    echo "User does not exist.";
}

$stmt->close();
$conn->close();
?>