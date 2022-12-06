<?php
include('koneksi.php');

$id = $_GET['id'];

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $isi = $_POST['isi'];
    $id_artikel = $_POST['id'];
    $date = date("Y/m/d");

    $quer = "INSERT INTO table_komentar VALUES ('','$id_artikel','$isi','$nama','$date')";
    $proses = mysqli_query($con,$quer);

    header("location:details.php?id=".$id_artikel);
}

?>