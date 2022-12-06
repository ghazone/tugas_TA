<?php 
session_start();
include("koneksi.php");
require_once("admin_header.php");
if (!isset($_SESSION['username'])) {
  echo "Anda tidak boleh mengakses halaman ini";
  echo "<a href='login.php'>Click to Login</a>";
  echo "Belum punya akun? <a href='register.php'>Daftar</a>";
}
?>
  <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row justify-content-center">
          <div class="col-12 col-sm-6 col-md-12">

           <div class="card">

           	 <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="cat_table" class="table table-bordered table-striped">
                  <thead>
                  <tr class="text-center my-auto">
                    <th>ID</th>
                    <th>Gambar</th>
                    <th>Kategori</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                  <tr class="text-center">
                    <td>1</td>
                    <td><img src="https://asset.kompas.com/crops/2sHxYC4t6Bw0s1Lcr332l8VI7SE=/0x0:980x653/750x500/data/photo/2019/08/04/5d45c517eb3b5.jpg" width="50" height="50"></td>
                    <td>Bulutangkis</td>
                    <td>4 Pemain Badminton China Diskors 3 Bulan karena Tidak Bermain Maksimal</td>
                    <td>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod.</td>
                    
                  </tr>
                  <tr class="text-center">
                    <td>2</td>
                    <td><img src="https://akcdn.detik.net.id/community/media/visual/2022/11/07/mohamed-salah-3.jpeg?w=700&q=90" width="50" height="50"></td>
                    <td>Sepakbola</td>
                    <td>Mohamed Salah Is Back!</td>
                    <td>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod.</td>
                    </tr>
                  <tr class="text-center">
                    <td>3</td>
                    <td><img src="https://www.ligaolahraga.com/storage/images/news/2022/11/04/galank-gunawan-tegaskan-siap-hadapi-bima-perkasa.jpg" width="50" height="50"></td>
                    <td>Basket</td>
                    <td>Galank Gunawan Tegaskan Siap Hadapi Bima Perkasa</td>
                    <td>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod.</td>
                    </tr>
                  <tr class="text-center">
                    <td>4</td>
                    <td><img src="https://asset-a.grid.id/crop/0x0:0x0/700x465/photo/2022/05/23/whatsapp-image-2022-05-23-at-08-20220523085703.jpeg" width="50" height="50"></td>
                    <td>Voli</td>
                    <td>SEA Games 2021 - 'Kelas Tim Voli Putra Indonesia Saat Ini Bukan Asia Tenggara Lagi</td>
                    <td>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod.</td>
                  </tr>
                  
                
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
