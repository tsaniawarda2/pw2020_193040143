<?php 
	// menghubungkan dengan file php lainnya
	require 'php/functions.php';

	// melakukan query
	$buku = query("SELECT * FROM buku")
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Latihan 5b</title>
 	<link rel="stylesheet" href="css/style.css">
 </head>
 <body>
 	<div class="container">
	 <h1>Daftar Buku Best Seller</h1>
		<table border="1" cellspacing="0" cellpadding="10">
			<tr>
				<th>No</th>
				<th>Gambar</th>
				<th>Judul</th>
				<th>Penulis</th>
				<th>Sinopsis</th>
				<th>Tahun Terbit</th>
				<th>Harga</th>
			</tr>

			<?php $i = 1 ?>
			<?php foreach ($buku as $daftar) :?>
				<tr>
					<td><?= $i ?></td>
					<td class="kotak"><img src="assets/img/<?= $daftar["Gambar"]; ?>"></td>
					<td><?= $daftar["Judul"] ?></td>
					<td><?= $daftar["Penulis"] ?></td>
					<td><?= $daftar["Sinopsis"] ?></td>
					<td><?= $daftar["Tahun Terbit"] ?></td>
					<td><?= "Rp.".$daftar["Harga"]?></td>
				</tr>
			<?php $i++ ?>
			<?php endforeach; ?>
		</table>
	</div>
 </body>
 </html>