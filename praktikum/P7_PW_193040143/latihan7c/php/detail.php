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
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Latihan 7c</title>
  <link rel="stylesheet" href="../css/detail.css">
</head>

<body>
  <h1>~ Detail Buku ~</h1>
  <div class="container">
    <div class="Gambar">
      <img src="../assets/img/<?= $buku["Gambar"]; ?>">
    </div>
    <div class="keterangan">
      <p><?= $buku["Judul"] ?></p>
      <p><?= $buku["Penulis"] ?></p>
      <p><?= $buku["Sinopsis"] ?></p>
      <p><?= $buku["Tahun_Terbit"] ?></p>
      <p><?= "Rp." . $buku["Harga"] ?></p>
    </div>

    <div class="tombol-kembali">
      <a href="../index.php"><img src="../assets/img/logo.png"></a>
    </div>
  </div>
</body>

</html>