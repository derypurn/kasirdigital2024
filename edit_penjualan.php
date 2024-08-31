<?php
include "koneksi.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $tgl = $_POST['tgl_penjualan'];
    $harga = $_POST['total_harga'];
    $pelanggan = $_POST['pelanggan_id'];

    $query = mysqli_query($koneksi, "UPDATE penjualan SET id = '$id', tgl_penjualan = '$tgl', total_harga = '$harga', pelanggan_id = '$pelanggan'  WHERE id = '$id'");

    if ($query) {
        echo "<script>
        alert('Data Berhasil Diubah!');
        document.location='table_penjualan.php';
        </script>";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
