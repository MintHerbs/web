<?php
$host = 'localhost';
$db = 'korisnici';
$user = 'root';
$pass = ''; // blank if no password

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>