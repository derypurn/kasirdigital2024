<?php
include "koneksi.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $query = mysqli_query($koneksi, "UPDATE produk SET id = '$id', nama = '$nama', harga = '$harga', stok = '$stok'  WHERE id = '$id'");

    if ($query) {
        echo "<script>
        alert('Data Berhasil Diubah!');
        document.location='table_produk.php';
        </script>";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
