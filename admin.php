<body class="bg-dark">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php
session_start();
    include "koneksi.php";
    $query="SELECT * FROM tb_siswa";
    $result=mysqli_query($con,$query);
    $no=1;
    $row=mysqli_num_rows($result);
if (isset($_SESSION['level']) && isset($_SESSION['username'])) {
    if ($_SESSION['level']== "admin") {?>
        <header class="p-3 rounded bg-primary col-md-11 mx-auto mt-3">
        <div class="p-5 text-center bg-light rounded">
            <h2 class="mb-5">Ini Halaman Admin</h2>
            <h4 class=" fs-2">Selamat Datang <b><?php echo $_SESSION['username']?>.</h4>
        </div>
        </header>
        <nav class="navbar navbar-expand-lg col-md-11 mx-auto bg-light rounded border mt-3">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                    <span class="nav-link fw-bold mx-4">Anda Login Sebagai <?php echo $_SESSION['level']?>.</span>
                    </li>
                </ul>
                <p class="navbar-nav mr-auto nav-item">
      <a class="nav-link disabled">Home <span class="sr-only">(current)</span></a>
      <a class="nav-link" href="custom.php">Kelola</a>
      <a class="nav-link" href="tentang.php">Tentang</a>
      <a class="nav-link" href="tutor.php">Tutorial</a>
    </p>
                <a href="logout.php" class="btn btn-outline-success my-2 my-sm-0 ms-auto mx-4">Log Out</a>
            </div>
        </nav>
        <menu class="col-md-11 mx-auto my-3 rounded bg-primary p-3">
            <div class="p-3 text-center bg-light rounded">
            <h3 class="fs-3">Menu Dashboard</h3><br>
            <table border="1" style="margin: auto;text-align:center" class="table">
            <tr>
                <th><?php echo "Banyak Data : $row" ?></th>
                <th>No</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>TTL</th>
                <th>Alamat</th>
                <th>Kota</th>
                <th>Jenis Kelamin</th>
                <th>Hobby</th>
                <th>Ekstrakulikuler</th>
            </tr>
            <?php
        while ($data=mysqli_fetch_array($result)) {?>
        <tr>
            <td></td>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['nis']; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['kelas']; ?></td>
            <td><?php echo $data['ttl']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['kota']; ?></td>
            <td><?php echo $data['jk']; ?></td>
            <td><?php echo $data['hobi']; ?></td>
            <td><?php echo $data['eskul']; ?></td>
        </tr>
        <?php
        }
        ?>
        <tr>
            <td colspan="14" style="border:none ;"></td>
        </tr>
            </table>
            </div>
        </menu>
        <?php
    }
    else if ($_SESSION['level'] == "user") {
        header('location:user.php');
    }
}
if (!isset($_SESSION['level'])) {
    echo "Anda tidak boleh mengakses halaman ini";
    echo "<a href='login.php'>Click to Login</a>";
    echo "Belum punya akun? <a href='register.php'>Daftar</a>";
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>