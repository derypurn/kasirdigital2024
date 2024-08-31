<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $query = mysqli_query($koneksi, "INSERT INTO produk (id, nama, harga, stok) VALUES ($id,'$nama', $harga, $stok)");

    if ($query) {
        echo "<script>
        alert('Data Berhasil Ditambahkan!');
        document.location='table_produk.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal Ditambahkan!');
        document.location='table_produk.php';
        </script>";
    }
}
