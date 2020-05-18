<?php
require '../php/functions.php';
$buku = cari($_GET['keyword']);
?>

<?php foreach ($buku as $daftar) : ?>
  <div class="col m3 s6">
    <div class="klik">
      <!-- Buku -->
      <div class="gambar">
        <img src="assets/img/<?= $daftar["Gambar"]; ?>">
      </div>
      <div class="judul">
        <h4 style="text-decoration: none">
          <?= $daftar["Judul"]; ?>
        </h4>
      </div>
      <div class="penulis">
        <h4><?= $daftar["Penulis"] ?></h4>
      </div>
      <div class="tombol">
        <a class="btn waves-effect waves-light" href="php/detail.php?id=<?= $daftar['No']; ?>">Details</a>
      </div>
    </div>
  </div>
<?php endforeach; ?>