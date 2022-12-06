<?php
include('koneksi.php');
$query = "SELECT * FROM table_kategori";
$result = mysqli_query($con, $query);
?>
<!DOCTYPE html>

<head>
  <!-- CSS only -->
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <title>Sport-Addicts</title>

  <style>
    .hover-custom {
      position: relative;
    }


    .hover-custom::before {
      content: '';
      position: absolute;
      width: 100%;
      height: 4px;
      border-radius: 4px;
      background-color: #2641da;
      bottom: 0;
      left: 0;
      transform-origin: right;
      transform: scaleX(0);
      transition: transform .3s ease-in-out;
    }

    .hover-custom:hover::before {
      transform-origin: left;
      transform: scaleX(1);
    }
  </style>

</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white mt-2 shadow-4">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <span class="text-info fw-bold h5" style="margin-left:70px;margin-right:50px; "><a href="" class="text-decoration-none">Sport-Addicts</a></span>
          </li>
        </ul>
        <p class="navbar-nav mr-auto nav-item mx-5">
          <a class="nav-link hover-custom text-dark" href="guest.php">Home</a>
          <?php while ($data = mysqli_fetch_array($result)) { ?>
            <a class="nav-link hover-custom text-dark" href="category.php?id=<?php echo $data['id']; ?>"><?php echo $data['nama_kategori'] ?></a>
          <?php } ?>
        </p>
        <form class=" my-sm-0 ms-auto mx-4 m-auto d-flex"> <input class="form-control mx-2 rounded" type="search" placeholder="Search" aria-label="Search"><button class="btn btn-outline-success btn-md rounded" type="submit">Search</button></form>
    </nav>
  </header>