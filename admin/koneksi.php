<?php
session_start();

// Koneksi ke database
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "db_tekweb";

// Membuat koneksi
$connection = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($connection->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
