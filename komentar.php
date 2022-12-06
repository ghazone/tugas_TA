<?php 
session_start();
include('koneksi.php');
include ('admin_header.php');

$query = "SELECT * from table_komentar";
$result = mysqli_query($con,$query);
?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row justify-content-center">
          <div class="col-12 col-sm-6 col-md-10">
           <div class="card">
           	 <div class="card-header">
                <h3 class="card-title">Komentar</h3>
            </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="cat_table" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Isi Komentar</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                 <?php while ($data = mysqli_fetch_array($result)) {?>
                  <tr>
                    <td><?php echo $data['nama_user'] ?></td>
                    <td><?php echo $data['isi'] ?></td>
                    <td>
                    	<a href="komentar_delete.php?id=<?php echo $data['id'];?>" class="btn btn-danger btn-xs" onclick="return confirm('apakah anda yakin?')"> Delete</a>
                    </td>
                  </tr>
                  <?php } ?>
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
 <?php include ('admin_footer.php')?>