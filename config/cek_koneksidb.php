<?php
// Include file koneksi
include('koneksi.php');

// Sekarang Anda dapat menggunakan variabel $conn
// Misalnya, untuk menjalankan query pada tabel pembelian
$result = $conn->query("SELECT * FROM pembelian");

if ($result === false) {
    die("Error: " . $conn->error);
}

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Hanya menampilkan pesan tanpa nama penjual
        echo "Data Ditemukan<br>";
    }
} else {
    echo "Tidak ada data penjual.";
}

// Tutup koneksi (jika diperlukan)
$conn->close();
?>
