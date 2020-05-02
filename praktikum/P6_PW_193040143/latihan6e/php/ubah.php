<?php
require 'functions.php';

$id = $_GET['id'];
$daftar = query("SELECT * FROM buku WHERE No = $id")[0];

if (!isset($_GET['id'])) {
  header("Location: ../index.php");
  exit;
}

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
              alert('Data Berhasil DiUbah!');
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
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 6e</title>
</head>

<body>
  <h3>Form Ubah Data Buku</h3>
  <form action="" method="POST">
    <input type="hidden" name="No" id="id" value="<?= $daftar['No']; ?>">
    <ul>
      <li>
        <label for="gambar">Gambar :</label><br>
        <input type="text" name="Gambar" id="gambar" required value="<?= $daftar['Gambar']; ?>"><br><br>
      </li>
      <li>
        <label for="judul">Judul :</label><br>
        <input type="text" name="Judul" id="judul" required value="<?= $daftar['Judul']; ?>"><br><br>
      </li>
      <li>
        <label for="penulis">Penulis :</label><br>
        <input type="text" name="Penulis" id="penulis" required value="<?= $daftar['Penulis']; ?>"><br><br>
      </li>
      <li>
        <label for="sinopsis">Sinopsis :</label><br>
        <input type="text" name="Sinopsis" id="sinopsis" required value="<?= $daftar['Sinopsis']; ?>"><br><br>
      </li>
      <li>
        <label for="tahun_terbit">Tahun Terbit :</label><br>
        <select name="Tahun Terbit" id="tahun_terbit" required value="<?= $daftar['Tahun Terbit']; ?>">
          <option value="">-----Pilih tahun terbit-----</option>
          <option value="2020">2020</option>
          <option value="2019">2019</option>
          <option value="2018">2018</option>
          <option value="2017">2017</option>
          <option value="2016">2016</option>
          <option value="2015">2015</option>
          <option value="2014">2014</option>
          <option value="2013">2013</option>
          <option value="2012">2012</option>
          <option value="2011">2011</option>
          <option value="2010">2010</option>
        </select>
      </li>
      <br>
      <li>
        <label for="harga">Harga :</label><br>
        <input type="text" name="Harga" id="harga" required value="<?= $daftar['Harga']; ?>"><br><br>
      </li>
      <button type="submit" name="ubah">Ubah Data!</button>
      <button type="submit">
        <a href="index.php" style="text-decoration: none; color: black;">Kembali</a>
      </button>
    </ul>
  </form>
</body>

</html>