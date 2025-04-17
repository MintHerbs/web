<?php
$host = 'localhost';
$db = 'korisnici';
$user = 'root';
$pass = ''; // prazno ako ne koristiš lozinku u XAMPP-u

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Konekcija neuspešna: " . $conn->connect_error);
}
?>
