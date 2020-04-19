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
 	<title>Latihan 5c</title>
 	<link rel="stylesheet" href="css/styleindex.css">
 </head>
 <body>
 	<h1>Daftar Buku Best Seller</h1>
 	<div class="container">
		<?php foreach ($buku as $daftar) :?>
			<p class="Judul">
				<a href="php/detail.php?No=<?= $daftar['No'] ?>">
					<?= $daftar["Judul"] ?>
				</a>
			</p>
		<?php endforeach; ?>
		</table>
	</div>
 </body>
 </html>