<?php 
session_start();
include('koneksi.php');
$query = "SELECT * FROM table_kategori";
$result = mysqli_query($con, $query);
require_once('admin_header.php');?>
<section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row justify-content-center">
          <div class="col-12 col-sm-6 col-md-12">

           <div class="card card-default">
          <div class="card-header">
          </div>
          <!-- /.card-header -->
          <div class="card-body">
          	<form method="post" action="artikel_tambah_proses.php" enctype='multipart/form-data'>
            <div class="row">
            
              <div class="col-md-8">
                <div class="form-group">

                  <label>Judul</label>
                   <input type="text" class="form-control"  name="judul" autocomplete="off">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Deskripsi</label>
                  <textarea class="textarea" name="deskripsi" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                          	
                   </textarea>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>Kategori </label>
                  <select class="form-control select2" name="kategori" style="width: 100%;" required="required">
                  	<?php 
                  		while($data = mysqli_fetch_array($result)){ ?>
                  		<option value="<?php echo $data['id'];?>"><?php echo $data['nama_kategori'] ?></option>
                  	<?php	}?>
                    
                  </select>
                </div>
                <!-- /.form-group -->
                <!-- /.form-group -->

                <div class="form-group">
                  <label>Gambar</label>
                <input type="file" class="form-control"  name="gambar">
                </div>

                 <div class="form-group text-center">
                 
                <input type="submit" class="btn btn-md btn-primary" name="submit" value="Simpan">&ensp;
                <a href="artikel.php" class="btn btn-primary">Batal</a>
                </div>
              </div>
           
              <!-- /.col -->
            </div>
            </form>
            <!-- /.row -->


          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
          </div>
         
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
<?php require_once('admin_footer.php'); ?>