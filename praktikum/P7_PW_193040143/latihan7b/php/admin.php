<?php
// menghubungkan dengan file php lainnya
require 'functions.php';

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $buku = query("SELECT * FROM buku WHERE
          Judul LIKE '%$keyword%' OR
          Penulis LIKE '%$keyword%' OR
          Tahun_Terbit LIKE '%$keyword%' ");
} else {
  $buku = query("SELECT * FROM buku");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 7b</title>
  <link rel="stylesheet" href="../css/admin.css">
  <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
</head>

<body>
  <div class="logout">
    <a href="logout.php"><button>Logout</button></a>
  </div>
  <h1>Daftar Buku Best Seller</h1>
  <div class="content cf">
    <div class="add">
      <a href="tambah.php"><button>Tambah Data</button></a>
    </div>
    <div class="cari">
      <form action="" method="GET">
        <input type="text" name="keyword" size="40" placeholder="Masukan keyword penulusuran..." autofocus autocomplete="off">
        <button type="submit" name="cari">Cari!</button>
      </form>
    </div>
    <br>
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
      <?php if (empty($buku)) : ?>
        <tr>
          <td colspan="8">
            <h2>Data tidak ditemukan</h2>
          </td>
        </tr>
      <?php else : ?>
        <?php $i = 1; ?>
        <?php foreach ($buku as $daftar) : ?>
          <tr>
            <td><?= $i; ?></td>
            <td>
              <a href="ubah.php?id=<?= $daftar["No"]; ?>"><button class="ubah">Ubah</button></a>
              <a href="hapus.php?id=<?= $daftar["No"]; ?>" onclick="return confirm('Hapus Data??')"><button class="hapus">Hapus</button></a>
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
      <?php endif; ?>
    </table>
  </div>

</body>

</html>