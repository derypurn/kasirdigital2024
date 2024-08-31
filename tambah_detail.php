<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $penjualan_id = $_POST['penjualan_id'];
    $produk_id = $_POST['produk_id'];
    $qty = $_POST['qty'];
    $subtotal = $_POST['subtotal'];

    $query = mysqli_query($koneksi, "INSERT INTO detailpenjualan (id, penjualan_id, produk_id, qty, subtotal) VALUES ($id, $penjualan_id, $produk_id, $qty, $subtotal)");

    if ($query) {
        echo "<script>
        alert('Data Berhasil Ditambahkan!');
        document.location='table_detail.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal Ditambahkan!');
        document.location='table_detail.php';
        </script>";
    }
}
