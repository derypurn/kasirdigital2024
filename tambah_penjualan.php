<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $tgl_penjualan = $_POST['tgl_penjualan'];
    $total_harga = $_POST['total_harga'];
    $pelanggan = $_POST['pelanggan_id'];
    $jumlah = $_POST['jumlah'];

    $total = $total_harga * $jumlah;
    $query = mysqli_query($koneksi, "INSERT INTO penjualan  VALUES ($id, '$tgl_penjualan', $total, $pelanggan)");

    if ($query) {
        echo "<script>
        alert('Data Berhasil Ditambahkan!');
        document.location='table_penjualan.php';
        </script>";
    } else {
        echo "<script>
            alert('Data Gagal Ditambahkan!');
            document.location='table_penjualan.php';
            </script>";
    }
}
