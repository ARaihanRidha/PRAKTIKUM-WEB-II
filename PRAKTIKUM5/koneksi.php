<?php 
$namaHost = "localhost";
$username = "root";
$password = "";
$namaDB = "buku";
$connect = mysqli_connect($namaHost,$username,$password,$namaDB);
if (!$connect) {
    echo "<script> alert('Tidak dapat terhubung') </script>";
    die;
}
?>