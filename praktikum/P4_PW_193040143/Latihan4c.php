<?php 
	$pemain = [
		"Cristiano Ronaldo" => "Juventus",
		"Lionel Messi" => "Barcelona",
		"Luca Modric" => "Real Madrid",
		"Mohammad Salah" => "Liverpool",
		"Neymar Jr" => "Paris Saint Germain",
		"Sadio Mane" => "Liverpool",
		"Zlatan Ibrahimovic" => "Ac Milan"];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Latihan 4c</title>
</head>
<body>
	<p><b>Daftar pemain bola terkenal dan clubnya</b></p>
	<table>
		<?php foreach ($pemain as $nama => $club) {
			echo "
				<tr>
					<td><b>$nama</b></td>
					<td>:</td>
					<td>$club</td>
				</tr>
			";
		}
		?>
	</table>
</body>
</html>