<?php
require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
              alert('Data Berhasil Ditambahkan!');
              document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
              alert('Data Gagal Ditambahkan!');
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
  <title>Latihan 6c</title>
</head>

<body>
  <h3>Form Tambah Data Buku</h3>
  <form action="" method="POST">
    <ul>
      <li>
        <label for="gambar">Gambar :</label><br>
        <input type="text" name="Gambar" id="gambar" required><br><br>
      </li>
      <li>
        <label for="judul">Judul :</label><br>
        <input type="text" name="Judul" id="judul" required><br><br>
      </li>
      <li>
        <label for="penulis">Penulis :</label><br>
        <input type="text" name="Penulis" id="penulis" required><br><br>
      </li>
      <li>
        <label for="sinopsis">Sinopsis :</label><br>
        <input type="text" name="Sinopsis" id="sinopsis" required><br><br>
      </li>
      <li>
        <label for="tahun_terbit">Tahun Terbit :</label><br>
        <select name="TahunTerbit" id="tahun_terbit" required>
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
        <input type="text" name="Harga" id="harga" required><br><br>
      </li>
      <button type="submit" name="tambah">Tambah Data!</button>
      <button type="submit">
        <a href="index.php" style="text-decoration: none; color: black;">Kembali</a>
      </button>
    </ul>
  </form>
</body>

</html>