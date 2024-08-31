<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $password = $_POST['password'];

    $query = mysqli_query($koneksi, "INSERT INTO login ( username, password, nama, jabatan) VALUES ('$username', '$password', '$nama', '$jabatan' )");

    if ($query) {
        echo "<script>
        alert('Registrasi Berhasil!');
        document.location='login.php';
        </script>";
    } else {
        echo "<script>
        alert('Registrasi Gagal!');
        document.location='registrasi.php';
        </script>";
    }
}
