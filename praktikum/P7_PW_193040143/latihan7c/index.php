<?php
// menghubungkan dengan file php lainnya
require 'php/functions.php';

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $buku = query("SELECT * FROM buku WHERE
          Judul LIKE '%$keyword%' ");
} else {
  $buku = query("SELECT * FROM buku");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Latihan 7c</title>
  <link rel="stylesheet" href="css/styleindex.css">
  <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
</head>

<body>
  <h1>Daftar Buku Best Seller</h1>
  <div class="content cf">
    <div class="admin">
      <a href="php/login.php"><button>Masuk ke halaman admin</button></a>
    </div>
    <div class="cari">
      <form action="" method="GET">
        <input type="text" name="keyword" size="40" placeholder="Masukan keyword penulusuran..." autofocus autocomplete="off">
        <button type="submit" name="cari">Cari!</button>
      </form>
    </div>
    <div class="container">
      <?php if (empty($buku)) : ?>
        <tr>
          <td colspan="8">
            <h2>Data tidak ditemukan</h2>
          </td>
        </tr>
      <?php else : ?>
        <?php foreach ($buku as $daftar) : ?>
          <p class="Judul">
            <a href="php/detail.php?id=<?= $daftar['No']; ?>">
              <?= $daftar["Judul"]; ?>
            </a>
          </p>
        <?php endforeach; ?>
      <?php endif; ?>
      </table>
    </div>
  </div>
</body>

</html>