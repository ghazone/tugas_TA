<?php
include('koneksi.php');
include('header.php');

$id = $_GET['id'];
$query = "SELECT * FROM table_artikel WHERE id=$id";
$result = mysqli_query($con, $query);
$data = mysqli_fetch_array($result);


$query2 = "SELECT * FROM table_artikel ORDER BY id DESC LIMIT 0,4";
$rest = mysqli_query($con, $query2);

$que = "SELECT * FROM table_komentar WHERE id_artikel=$id";
$restkom = mysqli_query($con,$que);

?>
<main class="p-5 shadow-4">
    <div class="container p-5 rounded shadow-4">
        <div class="row mx-auto">
            <div class="col-md-8">
                <div class="card mb-4">
                    <img src="assets/image/<?php echo $data['gambar'] ?>" class="img-fluid rounded">
                </div>
                <div class="card mb-4 mx-auto">
                    <div class="card-body">
                        <h3 class="mb-3"><?php echo $data['judul'] ?></h3>
                        <?php echo $data['deskripsi'] ?>
                    </div>
                </div>


                <div class="card mb-3 border-0">
                    <span class="h4 bg-dark text-light py-2">&ensp;Komentar</span>
                    <?php while ($dat = mysqli_fetch_array($restkom)) {?>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person mt-1" viewBox="0 0 16 16">
                                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                                    </svg>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="fw-bold mb-1"><?php echo $dat['nama_user'] ?></h6>
                                    <div class="mb-3">
                                        <p class="mb-0 text-secondary">
                                            <?php echo $dat['tanggal'] ?>
                                        </p><hr>
                                        <p class="mb-0">
                                            <?php echo $dat['isi'] ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                    <span class="bg-dark">blank</span>
                </div>
                <!--/.Comments-->

                <!--Reply-->
                <div class="card mb-3 border-0">
                    <span class="h4 bg-dark text-light py-2">&ensp;Tinggalkan Komentar</span>
                    <div class="card-body">

                        <!-- Default form reply -->
                        <form method="POST" action="komentar_proses.php">
                            <input type="hidden" name="id" value="<?php echo $id ?>" readonly>
                            <!-- Comment -->
                            <div class="form-group">
                                <label for="replyFormComment">Komentar</label>
                                <textarea class="form-control" id="replyFormComment" rows="5" name="isi"></textarea>
                            </div>

                            <!-- Name -->
                            <label for="replyFormName">Nama</label>
                            <input type="name" id="replyFormName" class="form-control" autocomplete="off" name="nama">
                            <div class="mt-4">
                                <button class="btn btn-primary btn-md" type="submit" name="submit">Kirim</button>
                            </div>
                        </form>
                        <!-- Default form reply -->
                    </div>
                    <span class="h4 bg-dark">&ensp;blank</span>
                </div>

            </div>
            <div class="col-md-4 mx-auto">
                <img class="w-100 rounded mb-4" src="https://www.gourmetads.com/wp-content/uploads/2019/05/fast-food-ads-mcdonalds-300x600.jpg">

                <div class="card mt-3">
                    <span class="h4 bg-dark text-light">&emsp14; Latest News</span>
                    <div class="row mt-2">
                        <?php while ($data = mysqli_fetch_array($rest)) { ?>
                            <div class="col-md-5 ms-2 mb-3">
                                <div class="bg-image hover-overlay">
                                    <img src="assets/image/<?php echo $data['gambar'] ?>" class="img-fluid rounded" alt="">
                                    <a href="details.php?id=<?php echo $data['id']; ?>">
                                        <div class="mask" style="background-color: rgba(26, 1, 1, 0.15);"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <p>
                                    <a href="details.php?id=<?php echo $data['id']; ?>" class="text-decoration-none text-dark"><?php echo $data['judul'] ?></a>
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