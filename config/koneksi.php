<?php
$host = "localhost"; // Nama host database
$username = "root"; // Nama pengguna database
$password = ""; // Kata sandi database
$database = "master_penjualan"; // Nama database
// Buat koneksi
$conn = new mysqli($host, $username, $password, $database);
// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
