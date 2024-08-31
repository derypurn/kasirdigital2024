<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $tgl_penjualan = $_POST['tgl_penjualan'];
    $total_harga = $_POST['total_harga'];
    $pelanggan = $_POST['pelanggan_id'];

    $query = mysqli_query($koneksi, "INSERT INTO penjualan (id, tgl_penjualan, total_harga, pelanggan_id) VALUES ($id, '$tgl_penjualan', $total_harga, $pelanggan)");

    if ($query) {
        header("Location: table_penjualan.php");
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
