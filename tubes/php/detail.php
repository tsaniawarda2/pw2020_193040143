<?php
// Mengechek apakah ada id yang dikirimkan
// jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])) {
  header("Location: ../index.php");
  exit;
}

require 'functions.php';

// Mengambil id dari url
$id = $_GET['id'];

// melakukan query dengan parameter id yang diambil dari url
$buku = query("SELECT * FROM buku WHERE No = $id")[0];
?>

<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />

  <!-- MY CSS -->
  <link rel="stylesheet" href="../css/detail.css">

  <!-- MY FONT -->
  <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Stylish&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cambay:ital@1&display=swap" rel="stylesheet">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Leviosa Store</title>
  <link rel="icon" href="../assets/img/icon.png" class="responsive-img">
</head>

<body>
  <!-- Container -->
  <div class="container">
    <div class="card-panel">
      <div class="row center">
        <div class="col m6 s12">
          <div class="judul">
            <h3><?= $buku["Judul"] ?></h3>
          </div>
          <div class="gambar">
            <img src="../assets/img/<?= $buku["Gambar"]; ?>" width="250">
          </div>
          <div class="penulis">
            <h4><?= $buku["Penulis"] ?></h4>
          </div>
          <div class="tombol">
            <a class="btn waves-effect waves-light" href="../index.php">Back</a>
          </div>
        </div>


        <!-- KETERANGAN -->
        <div class="col m6 s12 keterangan">
          <div class="row sinopsis">
            <div class="col m4 s12">
              <p>Sinopsis</p>
            </div>
            <div class="col m1 s12">
              <p>:</p>
            </div>
            <div class="col m7 s12">
              <p><?= $buku["Sinopsis"] ?></p>
            </div>
          </div>
          <div class="row tahun">
            <div class="col m4 s12">
              <p>Tahun Terbit</p>
            </div>
            <div class="col m1 s12">
              <p>:</p>
            </div>
            <div class="col m7 s12">
              <p><?= $buku["Tahun_Terbit"] ?></p>
            </div>
          </div>
          <div class="row harga">
            <div class="col m4 s12">
              <p>Harga</p>
            </div>
            <div class="col m1 s12">
              <p>:</p>
            </div>
            <div class="col m7 s12">
              <p>Rp. <?= $buku["Harga"] ?></p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="../js/materialize.min.js"></script>
  <script>
    const sideNav = document.querySelectorAll('.sidenav');
    M.Sidenav.init(sideNav);
  </script>
</body>

</html>