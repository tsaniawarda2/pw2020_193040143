<?php
// Melakukan koneksi ke database
$conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");

// Memilih database
mysqli_select_db($conn, "tubes_193040143") or die("Database salah!");

// query mengambil objek dari tabel di dalam database
$result = mysqli_query($conn, "SELECT * FROM buku");
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Latihan 5a</title>
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
			<?php while ($row = mysqli_fetch_assoc($result)) : ?>
				<tr>
					<td><?= $i ?></td>
					<td><img src="assets/img/<?= $row["Gambar"]; ?>"></td>
					<td><?= $row["Judul"] ?></td>
					<td><?= $row["Penulis"] ?></td>
					<td><?= $row["Sinopsis"] ?></td>
					<td><?= $row["Tahun_Terbit"] ?></td>
					<td><?= "Rp." . $row["Harga"] ?></td>
				</tr>
				<?php $i++ ?>
			<?php endwhile; ?>
		</table>
	</div>
</body>

</html>