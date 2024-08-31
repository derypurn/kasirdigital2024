<?php
session_start();
include "koneksi.php";
$username = $_POST["username"];
$password = $_POST["password"];
$sql = "SELECT * FROM login WHERE username = '$username' and password = '$password'";
$query = mysqli_query($koneksi, $sql);
if (mysqli_num_rows($query) != 0) {
    echo "<script>
    alert('Login Sukses!');
    document.location='dashboard.php';
    </script>";
    $data = mysqli_fetch_array($query);
    $_SESSION['username'] = $data['username'];
    $_SESSION['password'] = $data['password'];
    $_SESSION['LOGIN'] = "LOGIN";
} else {
    echo "<script>
    alert('login Gagal!');
    document.location='login.php';
    </script>";
}

$username2 = $_SESSION['username'];
$nama = $_SESSION['nama'];
