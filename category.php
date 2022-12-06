<?php
include('header.php');
$id = $_GET['id'];
$query = "SELECT * FROM table_artikel WHERE id_kategori=$id ORDER BY id DESC";
$result = mysqli_query($con, $query);
$row = mysqli_num_rows($result);
$i = 0;

$v1 =$row ;

$query2 = "SELECT * FROM table_artikel ORDER BY id DESC LIMIT 0,4";
$rest = mysqli_query($con,$query2);
?>
<main class="pt-3">
  <div class="container p-5 shadow-4">
    <div class="row text-left mx-auto">
      <div class="col-md-4 mx-auto">
        <?php while ($data = mysqli_fetch_array($result) and $i <= 2) { ?>
          <div class="bg-image hover-overlay rounded shadow-1-strong">
            <img src="assets/image/<?php echo $data['gambar'] ?>" class="img-fluid rounded mx-auto" alt="" style="height:200px;width:350px;" />
            <a href="details.php?id=<?php echo $data['id']; ?>">
              <div class="mask rounded" style="background:linear-gradient(to bottom, hsla(0, 0%, 0%, 0) 50%, hsla(0, 0%, 0%, 0.5));">
              </div>
            </a>
          </div>
          <div>
            <p class="text-secondary mt-1">Diupload pada <?php echo $data['tanggal'] ?></p>
            <h5 class="mb-4"><a href="details.php?id=<?php echo $data['id']; ?>" class="text-decoration-none hover-custom"><?php echo $data['judul'] ?></a></h5>
          </div>
        <?php $i++;
        } ?>
      </div>
      <div class="col-md-4 mx-auto">
        <?php
        $query = "SELECT * FROM table_artikel WHERE id_kategori=$id ORDER BY id DESC LIMIT $i,$row";
        $result = mysqli_query($con, $query);
        while ($data = mysqli_fetch_array($result)) { ?>
          <div class="bg-image hover-overlay rounded shadow-1-strong">
            <img src="assets/image/<?php echo $data['gambar'] ?>" class="img-fluid rounded mx-auto" alt="" style="height:200px;width:350px;" />
            <a href="details.php?id=<?php echo $data['id']; ?>">
              <div class="mask rounded" style="background:linear-gradient(to bottom, hsla(0, 0%, 0%, 0) 50%, hsla(0, 0%, 0%, 0.5));">
              </div>
            </a>
          </div>
          <div>
            <p class="text-secondary mt-1">Diupload pada <?php echo $data['tanggal'] ?></p>
            <h5 class="mb-4"><a href="details.php?id=<?php echo $data['id']; ?>" class="text-decoration-none hover-custom"><?php echo $data['judul'] ?></a></h5>
          </div>
        <?php } ?>
      </div>
      <div class="col-md-4">
        <img class="w-100 rounded mb-4" src="https://www.gourmetads.com/wp-content/uploads/2019/05/fast-food-ads-mcdonalds-300x600.jpg">
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
    </div>
  </div>
</main>
<?php include('footer.php'); ?>