<?php
include ('koneksi.php');
$msg = "";
 
// If upload button is clicked ...
if (isset($_POST['submit'])) {
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $kategori = $_POST['kategori'];
    $filename = $_FILES["gambar"]["name"];
    $tempname = $_FILES["gambar"]["tmp_name"];
    $folder = "assets/image/" . $filename;
    $date = date("Y/m/d");
 
    // Get all the submitted data from the form
    $sql = "INSERT INTO table_artikel (id,id_kategori,judul,deskripsi,gambar,tanggal) VALUES ('','$kategori','$judul','$deskripsi','$filename','$date')";
 
    // Execute query
    mysqli_query($con, $sql);
 
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
        header('location:artikel.php');
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
}
?>