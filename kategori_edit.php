<?php
session_start();
include("koneksi.php");
$id = $_GET['id'];
$query = "SELECT * FROM table_kategori WHERE id='$id'";
$result = mysqli_query($con, $query);
$data = mysqli_fetch_array($result);
require_once('admin_header.php'); ?>

<div class="col-md-8 mx-auto">
    <div class="card">
        <div class="card-header">
            <h4>Tambah Kategori</h4>
        </div>
        <div class="card-body">
            <form action="kategori_edit_proses.php" method="post">
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                <input type="text" name="kategori" value="<?php echo $data['nama_kategori']; ?>" class="form-control mx-auto">
        </div>
        <div class="card-footer">
            <input type="submit" value="Kirim" name="submit" class="text-right btn btn-primary">
            </form>
        </div>
    </div>
</div>

<?php require_once('admin_footer.php'); ?>