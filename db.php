<?php
$host = 'localhost';
$db = 'korisnici';
$user = 'root';
$pass = '';  // XAMPP’s default root password is empty

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// (Optionally) ensure you’re using the right character set:
$conn->set_charset('utf8mb4');

// …your queries go here…

// when you’re done:
$conn->close();
?>