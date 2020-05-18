<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

$id = $_GET['id'];
$daftar = query("SELECT * FROM buku WHERE No = $id")[0];

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
              alert('Data Berhasil Diubah!');
              document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
              alert('Data Gagal Diubah!');
              document.location.href = 'admin.php';
          </script>";
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />

  <!-- MY CSS -->
  <link rel="stylesheet" href="../css/ubah.css">

  <!-- MY FONTS -->
  <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cambay:ital@1&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Leviosa Store</title>
  <link rel="icon" href="../assets/img/icon.png" class="responsive-img">
</head>

<body>
  <h3>Form Ubah Data Buku</h3>
  <div class="container">
    <form action="" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="No" id="id" value="<?= $daftar['No']; ?>">
      <div class="row">
        <!-- Gambar -->
        <div class="col m5 s12">
          <div class="card-panel foto">
            <input type="hidden" name="gambar_lama" value="<?= $daftar['Gambar']; ?>">
            <p>Gambar :</p>
            <div class="input-field center">
              <img src="../assets/img/<?= $daftar['Gambar']; ?>" width="120" style="display: block;" class="img-preview">
              <input type="file" name="Gambar" class="gambar" onchange="previewImage()">
              <label for="gambar"></label>
            </div>
            <div class="tombol center">
              <button class="btn waves-effect waves-light" type="submit" name="ubah">Ubah Data!</button>
              <button class="btn waves-effect waves-light" type="submit">
                <a href="admin.php" style="color: white;">Kembali</a>
              </button>
            </div>
          </div>
        </div>
        <div class="col m1 s12"></div>
        <!-- Inputan -->
        <div class="col m6 12">
          <div class="card-panel inputan">
            <p>Judul :</p>
            <div class="input-field">
              <input type="text" name="Judul" id="judul" required value="<?= $daftar['Judul']; ?>">
              <label for="judul"></label>
            </div>
            <p>Penulis :</p>
            <div class="input-field">
              <input type="text" name="Penulis" id="penulis" required value="<?= $daftar['Penulis']; ?>">
              <label for="penulis"></label>
            </div>
            <p>Sinopsis :</p>
            <div class="input-field">
              <input type="text" name="Sinopsis" id="sinopsis" required value="<?= $daftar['Sinopsis']; ?>">
              <label for="sinopsis"></label>
            </div>
            <p>Tahun Terbit :</p>
            <div class="input-field">
              <input type="text" name="Tahun_Terbit" id="tahun_terbit" required value="<?= $daftar['Tahun_Terbit']; ?>">
              <label for="tahun_terbit"></label>
            </div>
            <p>Harga :</p>
            <div class="input-field">
              <input type="text" name="Harga" id="harga" required value="<?= $daftar['Harga']; ?>">
              <label for="harga"></label>
            </div>
          </div>
        </div>
      </div>

    </form>
  </div>
  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="../js/materialize.min.js"></script>
  <script src="../js/script.js"></script>
</body>

</html>