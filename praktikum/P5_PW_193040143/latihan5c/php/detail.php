<?php
// Mengechek apakah ada id yang dikirimkan
// jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['No'])) {
	header("location: ../index.php");
	exit;
}

require 'functions.php';

// Mengambil id dari url
$No = $_GET['No'];

// melakukan query dengan parameter id yang diambil dari url
$buku = query("SELECT * FROM buku WHERE No = $No")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Latihan 5c</title>
	<link rel="stylesheet" href="../css/style.css">
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
			<p><?= $buku["Tahun Terbit"] ?></p>
			<p><?= "Rp." . $buku["Harga"] ?></p>
		</div>

		<div class="tombol-kembali">
			<a href="../index.php"><img src="../assets/img/logo.png"></a>
		</div>
	</div>
</body>

</html>