<?php
session_start();
include("koneksi.php");
$id = $_GET['id'];
$query = "DELETE FROM table_artikel WHERE id='$id'";
$res=mysqli_query($con,$query);
if ($res) {
?>
<script type="text/javascript">document.location.href="artikel.php"</script>
<?php
}else{
    echo "Gagal hapus data";
}
?>