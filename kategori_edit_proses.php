<?php
session_start();
include("koneksi.php");
$id = $_POST['id'];
$kategori = $_POST['kategori'];
$query="UPDATE table_kategori SET nama_kategori='$kategori' WHERE id='$id';";
$result=mysqli_query($con,$query);
if ($result) {
    header('location:kategori.php');
}else{
    echo "Gagal update data";
}
?>