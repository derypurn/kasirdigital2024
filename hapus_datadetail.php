<?php
require_once "koneksi.php";
$id = $_POST['id'];

$query = "DELETE FROM detailpenjualan WHERE id ='$id'";
$result = mysqli_query($koneksi, $query);

if ($result) {
    echo "<script>
        alert('Data Berhasil Dihapus!');
        document.location='table_detail.php';
        </script>";
} else {
    echo "<script>
        alert('Data Gagal Dihapus!');
        document.location='table_detail.php';
        </script>";
}
