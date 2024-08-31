<?php
include "koneksi.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $penjualan_id = $_POST['penjualan_id'];
    $produk_id = $_POST['produk_id'];
    $qty = $_POST['qty'];
    $subtotal = $_POST['subtotal'];

    $query = mysqli_query($koneksi, "UPDATE detailpenjualan SET id = '$id', penjualan_id = '$penjualan_id', produk_id = '$produk_id', qty = '$qty', subtotal = '$subtotal'  WHERE id = '$id'");

    if ($query) {
        echo "<script>
        alert('Data Berhasil Diubah!');
        document.location='table_detail.php';
        </script>";
    } else {
        echo "<script>
            alert('Data Gagal Diubag!');
            document.location='formedit_detail.php';
            </script>";
    }
}
