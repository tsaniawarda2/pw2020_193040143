<?php
// menghubungkan dengan file php lainnya
require 'functions.php';

//melakukan query
$buku = query("SELECT * FROM buku")

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 6a</title>
  <link rel="stylesheet" href="../css/admin.css">
</head>

<body>
  <h1>Daftar Buku Best Seller</h1>
  <table border="1" cellpadding="13" cellspacing="0">
    <tr>
      <th>No</th>
      <th>Opsi</th>
      <th>Gambar</th>
      <th>Judul</th>
      <th>Penulis</th>
      <th>Sinopsis</th>
      <th>Tahun Terbit</th>
      <th>Harga</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($buku as $daftar) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td>
          <a href=""><button class="ubah">Ubah</button></a>
          <a href=""><button class="hapus">Hapus</button></a>
        </td>
        <td><img src="../assets/img/<?= $daftar["Gambar"]; ?>"></td>
        <td><?= $daftar["Judul"]; ?></td>
        <td><?= $daftar["Penulis"]; ?></td>
        <td class="sinopsis"><?= $daftar["Sinopsis"]; ?></td>
        <td><?= $daftar["Tahun_Terbit"]; ?></td>
        <td><?= "Rp." . $daftar["Harga"]; ?></td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>
  </table>
</body>

</html>