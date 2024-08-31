<?php
include "koneksi.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];

    $query = mysqli_query($koneksi, "UPDATE pelanggan SET id = '$id', nama = '$nama', alamat = '$alamat', telepon = '$telepon'  WHERE id = '$id'");

    if ($query) {
        echo "<script>
        alert('Data Berhasil Diubah!');
        document.location='table_pelanggan.php';
        </script>";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
