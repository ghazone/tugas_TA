<?php
session_start();
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM table_login WHERE username = '$username'";
$hasil = mysqli_query($con,$query);
$data = mysqli_fetch_array($hasil);

if ($password == $data['password']) {
    $_SESSION['username'] = $data['username'];

    header('location:index.php');
}else{
    header('location:login.php');
}
?>