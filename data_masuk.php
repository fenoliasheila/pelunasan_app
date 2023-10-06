<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari formulir
    $nomor_pembelian = $_POST["nomor_pembelian"];
    $tanggal_pembelian = $_POST["tanggal_pembelian"];
    $perusahaan_penjual = $_POST["perusahaan_penjual"];
    $barang_yang_dibeli = $_POST["barang_yang_dibeli"];
    $harga_pembelian = $_POST["harga_pembelian"];

    $nomor_pembayaran = $_POST["nomor_pembayaran"];
    $tanggal_pembayaran = $_POST["tanggal_pembayaran"];
    $jumlah_pembayaran = $_POST["jumlah_pembayaran"];
    $metode_pembayaran = $_POST["metode_pembayaran"];
    $bank = $_POST["bank"];

    $nama_pegawai = $_POST["nama_pegawai"];
    $jabatan_pegawai = $_POST["jabatan_pegawai"];
    $nomor_pegawai = $_POST["nomor_pegawai"];

    // Sekarang Anda dapat melakukan apa yang Anda inginkan dengan data ini, seperti menyimpannya ke dalam database.
    // Misalnya, Anda dapat menggunakan MySQLi atau PDO untuk menyimpan data ini ke dalam database MySQL.

    // Contoh koneksi ke database MySQL (gantilah dengan informasi database Anda)
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "nama_database";

    // Buat koneksi
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Periksa koneksi
    if ($conn->connect_error) {
        die("Koneksi ke database gagal: " . $conn->connect_error);
    }

    // Buat query SQL untuk menyimpan data ke dalam tabel yang sesuai
    $sql_pembelian = "INSERT INTO Pembelian (nomor_pembelian, tanggal_pembelian, perusahaan_penjual, barang_yang_dibeli, harga_pembelian) VALUES ('$nomor_pembelian', '$tanggal_pembelian', '$perusahaan_penjual', '$barang_yang_dibeli', '$harga_pembelian')";
    $sql_pembayaran = "INSERT INTO Pembayaran (nomor_pembayaran, tanggal_pembayaran, jumlah_pembayaran, metode_pembayaran, bank) VALUES ('$nomor_pembayaran', '$tanggal_pembayaran', '$jumlah_pembayaran', '$metode_pembayaran', '$bank')";
    $sql_pegawai = "INSERT INTO Pegawai (nama_pegawai, jabatan_pegawai, nomor_pegawai) VALUES ('$nama_pegawai', '$jabatan_pegawai', '$nomor_pegawai')";

    // Eksekusi query
    if ($conn->query($sql_pembelian) === TRUE && $conn->query($sql_pembayaran) === TRUE && $conn->query($sql_pegawai) === TRUE) {
        echo "Data berhasil disimpan.";
    } else {
        echo "Error: " . $conn->error;
    }

    // Tutup koneksi ke database
    $conn->close();
}
?>
