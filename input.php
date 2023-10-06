<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Formulir Pelunasan Pembelian Barang</title>
</head>
<body>
    <?php include('config/koneksi.php'); ?>
    <h2>Formulir Pelunasan Pembelian Barang</h2>
    <form action="data_masuk.php" method="POST">
        <table>
            <tr>
                <td><label for="nomor_pembelian">Nomor Pembelian:</label></td>
                <td><input type="text" id="nomor_pembelian" name="nomor_pembelian"></td>
            </tr>
            <tr>
                <td><label for="tanggal_pembelian">Tanggal Pembelian:</label></td>
                <td><input type="date" id="tanggal_pembelian" name="tanggal_pembelian"></td>
            </tr>
            <tr>
                <td><label for="perusahaan_penjual">Perusahaan Penjual:</label></td>
                <td><input type="text" id="perusahaan_penjual" name="perusahaan_penjual"></td>
            </tr>
            <tr>
                <td><label for="barang_yang_dibeli">Barang yang Dibeli:</label></td>
                <td><input type="text" id="barang_yang_dibeli" name="barang_yang_dibeli"></td>
            </tr>
            <tr>
                <td><label for="harga_pembelian">Harga Pembelian:</label></td>
                <td><input type="text" id="harga_pembelian" name="harga_pembelian"></td>
            </tr>
            <tr>
                <td><label for="nomor_pembayaran">Nomor Pembayaran:</label></td>
                <td><input type="text" id="nomor_pembayaran" name="nomor_pembayaran"></td>
            </tr>
            <tr>
                <td><label for="tanggal_pembayaran">Tanggal Pembayaran:</label></td>
                <td><input type="date" id="tanggal_pembayaran" name="tanggal_pembayaran"></td>
            </tr>
            <tr>
                <td><label for="jumlah_pembayaran">Jumlah Pembayaran:</label></td>
                <td><input type="text" id="jumlah_pembayaran" name="jumlah_pembayaran"></td>
            </tr>
            <tr>
                <td><label for="metode_pembayaran">Metode Pembayaran:</label></td>
                <td><input type="text" id="metode_pembayaran" name="metode_pembayaran"></td>
            </tr>
            <tr>
                <td><label for="bank">Bank:</label></td>
                <td><input type="text" id="bank" name="bank"></td>
            </tr>
            <tr>
                <td><label for="jabatan_pegawai">Jabatan Pegawai:</label></td>
                <td><input type="text" id="jabatan_pegawai" name="jabatan_pegawai"></td>
            </tr>
            <tr>
                <td><label for="nomor_pegawai">Nomor Pegawai:</label></td>
                <td><input type="text" id="nomor_pegawai" name="nomor_pegawai"></td>
            </tr>
        </table>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
