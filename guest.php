  <?php 
  include('header.php');
  include('koneksi.php');
  
  $counter = 0;

  $query = "SELECT * FROM table_artikel ORDER BY id DESC LIMIT 4";
  $result = mysqli_query($con,$query);

  $query2 = "SELECT * FROM table_artikel ORDER BY id DESC LIMIT 0,4";
  $rest = mysqli_query($con,$query2);

  $cat = "SELECT * FROM table_artikel WHERE id_kategori=1 ";
  $restc = mysqli_query($con,$cat);

  $cat1 = "SELECT * FROM table_artikel WHERE id_kategori=2";
  $restc1 = mysqli_query($con,$cat1);
  ?>
  <main class="py-3" style="background-color:#f5f5dc ;">
    <div class="p-5 mb-4 bg-image rounded-3" style="
    background-image:url('https://qubisastorage.blob.core.windows.net/files/articles/540/images/img1280/540-20210807085629509.jpg');
    height:400px    
    ">
      <div class="mask" style="background-color: rgba(0, 0, 0, 0.4);">
        <div class="d-flex justify-content-center align-items-center h-100">
          <div class="text-white">
            <h1 class="mb-3 col-md-10 mx-auto" style="margin-top: 225px">Selamat Datang Di Sport-Addicts</h1>
            <h5 class="mb-4 col-md-10 mx-auto">
              Website ini berisi tentang macam-macam artikel yang bertema olahraga meliputi manfaat suatu olahraga, pertandingan olahraga dan masih banyak yang lainnya
            </h5>
          </div>
        </div>
      </div>
    </div>
    <div class="container p-5 shadow-4 bg-light rounded" style="padding-left: 50px;padding-right:50px">
      <!--Section heading-->
      <!--Grid row-->
      <div class="row text-left mx-auto">
        <div class="col-md-4 mx-auto">
        <?php while ($data = mysqli_fetch_array($result) and $counter <=3) {?>
          <div class="mt-2">
            <div class="bg-image hover-overlay shadow-1-strong rounded mb-2">
              <img src="assets/image/<?php echo $data['gambar'] ?>" class="img-fluid" style="height:200px;width:350px;"/>
              <a href="details.php?id=<?php echo $data['id'];?>">
                <div class="mask" style="background-color: rgba(26, 1, 1, 0.15);"></div>
              </a>
            </div>
          </div>
          <p class="text-secondary">Diupload pada <?php echo $data['tanggal'] ?></p>
          <h4 class="mb-4">
            <a href="details.php?id=<?php echo $data['id'];?>" class="hover-custom text-decoration-none"><?php echo $data['judul'] ?></a>
          </h4>
          <?php $counter++; } ?>
        </div>
        <div class="col-md-4 mx-auto">
        <?php 
          $query = "SELECT * FROM table_artikel ORDER BY id DESC LIMIT $counter,4";
          $result = mysqli_query($con,$query);
        while ($data = mysqli_fetch_array($result)) {?>
          <div class="mt-2">
            <div class="bg-image hover-overlay shadow-1-strong rounded mb-2">
              <img src="assets/image/<?php echo $data['gambar'] ?>" class="img-fluid" style="height:200px;width:350px;"/>
              <a href="details.php?id=<?php echo $data['id'];?>">
                <div class="mask" style="background-color: rgba(26, 1, 1, 0.15);"></div>
              </a>
            </div>
          </div>
          <p class="text-secondary">Diupload pada <?php echo $data['tanggal'] ?></p>
          <h4 class="mb-4">
            <a href="details.php?id=<?php echo $data['id'];?>" class="hover-custom text-decoration-none"><?php echo $data['judul'] ?></a>
          </h4>
          <?php } ?>
        </div>
        <div class="col-md-4 mx-auto">
          <img src="https://s0.2mdn.net/simgad/13352633551414674248" alt="" class="img-fluid mt-2 rounded w-100"/>
          <div class="card mt-3">
            <span class="h4 bg-dark text-light">&emsp14; Latest</span>
            <div class="row mt-2">
              <?php while ($data = mysqli_fetch_array($rest)) {?>
              <div class="col-md-5 ms-2 mb-3">
                <div class="bg-image hover-overlay">
                  <img src="assets/image/<?php echo $data['gambar'] ?>" class="img-fluid rounded" alt="">
                  <a href="details.php?id=<?php echo $data['id'];?>">
                    <div class="mask" style="background-color: rgba(26, 1, 1, 0.15);"></div>
                  </a>
                </div>
              </div>
              <div class="col-md-6">
                <p>
                  <a href="details.php?id=<?php echo $data['id'];?>" class="text-decoration-none text-dark"><?php echo $data['judul'] ?></a>
                </p>
              </div>
              <?php } ?>  
            </div>
          </div>
        </div>
        <!-- kategori content -->
        <h2>Sepakbola</h2>
        <?php while ($data = mysqli_fetch_array($restc)) {?>
        <div class="col-md-4 mx-auto">
          <div class="mt-2">
            <div class="bg-image hover-overlay shadow-1-strong rounded mb-4">
              <img src="assets/image/<?php echo $data['gambar'] ?>" class="img-fluid" 
              style=" height:250px;"/>
              <a href="details.php?id=<?php echo $data['id'];?>">
                <div class="mask" style="background-color: rgba(26, 1, 1, 0.15);"></div>
              </a>
            </div>
          </div>
          <p class="text-secondary">Diupload pada <?php echo $data['tanggal'] ?></p>
          <h4>
            <a href="details.php?id=<?php echo $data['id'];?>" class="hover-custom text-decoration-none"><?php echo $data['judul'] ?></a>
          </h4>
          <br>
        </div>
        <?php } ?>
        <hr>
        <h2 class="mt-2">Basket</h2>
        <?php while ($data = mysqli_fetch_array($restc1)) {?>
        <div class="col-md-4 mx-auto">
          <div class="mt-2">
            <div class="bg-image hover-overlay shadow-1-strong rounded mb-4">
              <img src="assets/image/<?php echo $data['gambar'] ?>" class="img-fluid" 
              style=" height:250px;"/>
              <a href="details.php?id=<?php echo $data['id'];?>">
                <div class="mask" style="background-color: rgba(26, 1, 1, 0.15);"></div>
              </a>
            </div>
          </div>
          <p class="text-secondary">Diupload pada <?php echo $data['tanggal'] ?></p>
          <h4>
            <a href="details.php?id=<?php echo $data['id'];?>" class="hover-custom text-decoration-none"><?php echo $data['judul'] ?></a>
          </h4>
        </div>
        <?php } ?>
      </div>
  </main>
  <?php include('footer.php'); ?>