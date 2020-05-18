<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Latihan 2b</title>
</head>
<body>
	<table border="1" cellspacing="0" cellpadding="10">
		<tr>
			<th></th>
			<?php for ($i=1; $i <= 5; $i++) : ?>
				<th>Kolom <?= $i; ?></th> 
			<?php endfor; ?>
		</tr>

			<?php for ($j=1; $j <= 5 ; $j++) : ?>
			<tr></tr>
				<th>Baris <?= $j; ?></th>

			<?php for ($a=1; $a <=5 ; $a++) : ?>
				<td>Baris <?= $j; ?>, Kolom <?= $a; ?></td>
			<?php endfor; ?>
		<?php endfor; ?>
	</table>

	<br>
	<br>
	<hr>
	<h2>Table baris 2 dan 4 di kosongkan</h2>
	<table border="1" cellspacing="0" cellpadding="10">
		<tr>
			<th></th>
			<?php for ($i=1; $i <= 5; $i++) : ?>
				<th>Kolom <?= $i; ?></th> 
			<?php endfor; ?>
		</tr>

			<?php for ($j=1; $j <= 5 ; $j++) : ?>
			<tr></tr>
				<th>Baris <?= $j; ?></th>

			<?php 
			$a = 1;
				
				 	if ($a % 2) {
						for ($a=1; $a <= 5; $a++) : 
						echo "<td>Baris $j, Kolom $a</td>";
						endfor;
					} else {
						for ($a=1; $a <= 5; $a++) : 
						echo "<td>&nbsp</td>";
						endfor;
					}
				 	$a++;
				 
				 ?>
		<?php endfor; ?>
	</table>
</body>
</html>