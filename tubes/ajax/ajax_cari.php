<?php
require '../php/functions.php';
$buku = cari($_GET['keyword']);

?>
<table class="center">
  <tr>
    <th>No</th>
    <th class="aksi">Opsi</th>
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
        <td class="aksi">
          <div class="ubah">
            <a class="btn waves-effect waves-light black-text" href="ubah.php?id=<?= $daftar["No"]; ?>">Update</a>
          </div>
          <br>
          <div class="hapus">
            <a class="btn waves-effect waves-light black-text" href="ubah.php?id=<?= $daftar["No"]; ?>" onclick="return confirm('Hapus Data??')">Delete</a>
          </div>
        </td>
        <td><img src="../assets/img/<?= $daftar["Gambar"]; ?>" width="150"></td>
        <td><?= $daftar["Judul"]; ?></td>
        <td><?= $daftar["Penulis"]; ?></td>
        <td class="sinopsis">
          <?= $daftar["Sinopsis"]; ?>
        </td>
        <td><?= $daftar["Tahun_Terbit"]; ?></td>
        <td><?= "Rp." . $daftar["Harga"]; ?></td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>
  <?php endif; ?>
</table>