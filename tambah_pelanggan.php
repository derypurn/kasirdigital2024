<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];

    $query = mysqli_query($koneksi, "INSERT INTO pelanggan (id, nama, alamat, telepon) VALUES ($id, '$nama', '$alamat', $telepon)");

    if ($query) {
        echo "<script>
        alert('Data Berhasil Ditambahkan!');
        document.location='table_pelanggan.php';
        </script>";
    } else {
        echo "<script>
        alert('Data gagal Ditambahkan!');
        document.location='table_pelanggan.php';
        </script>";
    }
}
