<?php
session_start();
include("koneksi.php");
if (isset($_POST['submit'])) {
#form data
$id = $_POST['id'];
$deskripsi = $_POST['deskripsi'];
$id1 = $_POST['id_kategori'];
$judul = $_POST['judul'];
$filename = $_FILES["gambar"]["name"];
$tempname = $_FILES["gambar"]["tmp_name"];
$folder = "assets/image/" . $filename;
$date = date("Y/m/d");

#database
$query="UPDATE table_artikel SET id_kategori='$id1', judul='$judul', deskripsi='$deskripsi',gambar='$filename', tanggal='$date' WHERE id='$id';";
$result=mysqli_query($con,$query);

#Move image to asset folder
if (move_uploaded_file($tempname, $folder)) {
    echo "<h3>  Image uploaded successfully!</h3>";
} else {
    echo "<h3>  Failed to upload image!</h3>";
}

}
if ($result) {
    header('location:artikel.php');
}else{
    echo "Gagal update data";
}
?>