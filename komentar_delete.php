<?php
session_start();
include("koneksi.php");
$id = $_GET['id'];
$query = "DELETE FROM table_komentar WHERE id='$id'";
$res=mysqli_query($con,$query);
if ($res) {
?>
<script type="text/javascript">document.location.href="komentar.php"</script>
<?php
}else{
    echo "Gagal hapus data";
}
?>