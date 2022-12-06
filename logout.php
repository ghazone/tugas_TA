<body class="bg-dark">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php
session_start();
unset($_SESSION['username']);
session_destroy();
?>
<header class="col-md-11 p-3 rounded mx-auto my-3 bg-secondary">
<h2> Anda sudah Log out</h2>
</header>
<menu class="col-md-11 p-3 rounded mx-auto my-3 bg-secondary">
    <p class="fw-bold"><a class="text-light" href='login.php'>Login Kembali</a></p>
</menu>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>