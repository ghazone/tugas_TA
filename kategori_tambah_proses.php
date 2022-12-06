<?php
include ('koneksi.php');
 
// If upload button is clicked ...
if (isset($_POST['submit'])) {
    $kategori = $_POST['kategori'];
    $sql = "INSERT INTO table_kategori (id,nama_kategori) VALUES ('','$kategori')";
    // Execute query
    $hasil=mysqli_query($con, $sql);
 
    // Now let's move the uploaded image into the folder: image
    if ($hasil) {
        header('location:kategori.php');
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
}
?>