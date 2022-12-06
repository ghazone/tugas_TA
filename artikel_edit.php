<?php 
session_start();
include('koneksi.php');
$id = $_GET['id'];
$query = "SELECT table_artikel.*,table_kategori.nama_kategori FROM table_artikel JOIN table_kategori ON table_artikel.id_kategori = table_kategori.id where table_artikel.id='$id'";
$result = mysqli_query($con, $query);
$que = "SELECT * FROM table_kategori";
$res = mysqli_query($con,$que);
$no = 1;
$data = mysqli_fetch_array($result);
require_once('admin_header.php');?>
<section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row justify-content-center">
          <div class="col-12 col-sm-6 col-md-12">

           <div class="card card-default">
          <!-- /.card-header -->
          <div class="card-body">
          	<form method="post" action="artikel_edit_proses.php" enctype='multipart/form-data'>
            <div class="row">
            	<input type = "hidden" name="id" value="<?php echo $data['id'] ?>">
              <div class="col-md-8">
                <div class="form-group">

                  <label>Judul</label>
                   <input type="text" class="form-control"  name="judul" value="<?php  echo $data['judul'] ?>">
                   
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Deskripsi</label>
                  <textarea class="textarea" name="deskripsi" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                          <?php if(isset($data['deskripsi'])){ echo $data['deskripsi'];} ?>
                   </textarea>
                  
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>Kategori</label>
                  <select class="form-control select2" name="id_kategori" style="width: 100%;" required="required">
                  <?php 
                  		while($data1 = mysqli_fetch_array($res)){ ?>
                  		<option value="<?php echo $data1['id'];?>"><?php echo $data1['nama_kategori'] ?></option>
                  	<?php	}?>
                    
                    
                  </select>
                 
                </div>
                <!-- /.form-group -->
                <!-- /.form-group -->

                <div class="form-group">
                  <label>Gambar</label>
                <input type="file" class="form-control" value="<?= $data['gambar'];?>"  name="gambar">
                	<img src="assets/image/<?= $data['gambar'];?>" width="50" height="50">
                </div>

                 <div class="form-group text-center">
                 
                <input type="submit" class="btn btn-sm btn-primary" name="submit" value="Simpan">
                </div>
              </div>
           
              <!-- /.col -->
            </div>
            </form>
            <!-- /.row -->


          </div>
        </div>
        <!-- /.card -->
          </div>
         
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
<?php require_once('admin_footer.php'); ?>