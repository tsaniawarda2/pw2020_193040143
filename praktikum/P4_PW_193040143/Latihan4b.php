<?php 
	$pemain = array("Mohammad Salah", "Cristiano Ronaldo", "Lionel Messi", "Zlatan Ibrahimovic", "Neymar Jr");
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Latihan 4b</title>
</head>
<body>
	<p><b>Daftar pemain bola terkenal</b></p>
	<ol>
		<?php 
			foreach ($pemain as $nama) {
				print "<li>$nama</li>";
			}
		?>
	</ol>

	<p><b>Daftar pemain bola terkenal</b></p>
		<?php 
			$hasil = array_push($pemain, "Luca Modric", "Sadio Mane");

		?>
	<ol>
		<?php 
			$hasil = sort($pemain);
			foreach ($pemain as $nama) {
				print "<li>$nama</li>";
			}
		?>
	</ol>
</body>
</html>