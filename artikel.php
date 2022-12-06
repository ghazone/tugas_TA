<?php
session_start();
include('koneksi.php');
$query = "SELECT table_artikel.*,table_kategori.nama_kategori FROM table_artikel JOIN table_kategori ON table_artikel.id_kategori = table_kategori.id";
$result = mysqli_query($con, $query);
$no = 1;
$row = mysqli_num_rows($result);
require_once('admin_header.php');?>
  <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row justify-content-center">
          <div class="col-12 col-sm-6 col-md-12">

           <div class="card">

           	 <div class="card-header">
                <h3 class="card-title">Tabel Artikel</h3>
                <a href="artikel_tambah.php" class=" btn btn-sm btn-primary" style="float: right;">Add</a>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="cat_table" class="table table-bordered table-striped">
                  <thead>
                  <tr class="text-center">
                    <th>ID</th>
                    <th>Gambar</th>
                    <th style="width: 130px ;">Nama Kategori</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  $count = 1;
                  while ($data=mysqli_fetch_array($result)) {?>
                  <tr class="text-center">
                    <td><?php echo $count++; ?></td>
                    <td><img src="assets/image/<?= $data['gambar'] ?>" width="50" height="50"></td>
                    <td><?php echo $data['nama_kategori'] ?></td>
                    <td><?php echo $data['judul'] ?></td>
                    <td><span style="width: 350px; height: 100px;" class="overlord"><?php echo $data['deskripsi']?></span></td>
                    <td><?php echo $data['tanggal'] ?></td>
                    <td>
                    	<a href="artikel_edit.php?id=<?php echo $data['id']; ?>" class=" btn btn-primary btn-md" >Edit</a>
                    	<a href="artikel_delete.php?id=<?php echo $data['id']; ?>" class="btn btn-danger btn-md" onclick="return confirm('apakah anda yakin?')"> Delete</a>
                    </td>
                  </tr>
                  <?php }?>
                  <tr class="text-center">
                  </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
         
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
  <!-- /.content -->
<?php require_once('admin_footer.php'); ?>