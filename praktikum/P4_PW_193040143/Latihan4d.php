<?php 
	$pemain = [
		"pemain1" => ["nama" => "Cristiano Ronaldo", "club" => "Juventus", "main" => 100, "gol" => 76, "assist" => 30],
		"pemain2" => ["nama" => "Lionel Messi", "club" => "Barcelona", "main" => 120, "gol" => 80, "assist" => 12],
		"pemain3" => ["nama" => "Luca Modric", "club" => "Real Madrid", "main" => 87, "gol" => 12, "assist" => 48],
		"pemain4" => ["nama" => "Mohammad Salah", "club" => "Liverpool", "main" => 90, "gol" => 103, "assist" => 8],
		"pemain5" => ["nama" => "Neymar Jr", "club" => "Paris Saint Germain", "main" => 109, "gol" => 56, "assist" => 15],
		"pemain6" => ["nama" => "Sadio Mane", "club" => "Liverpool", "main" => 63, "gol" => 30, "assist" => 70],
		"pemain7" => ["nama" => "Zlatan Ibrahimovic", "club" => "Ac Milan", "main" => 100, "gol" => 10, "assist" => 12]
	];
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Latihan 4d</title>
 </head>
 <body>
 	<table border="1" cellspacing="0" cellpadding="5">
 		<tr>
 			<th>NO</th>
 			<th>NAMA</th>
 			<th>CLUB</th>
 			<th>MAIN</th>
 			<th>GOL</th>
 			<th>ASSIST</th>
 		</tr>
	<?php 
		$i = 1;
		foreach ($pemain as $isi) {
			echo "<tr>";
				echo "<td>$i</td>";
				echo "<td>".$isi['nama']."</td>";
				echo "<td>".$isi['club']."</td>";
				echo "<td>".$isi['main']."</td>";
				echo "<td>".$isi['gol']."</td>";
				echo "<td>".$isi['assist']."</td>";
			echo "</tr>";
		$i++;
		}
	 ?>
	 		<tr>
	 			<td>#</td>
	 			<td colspan="2" align="center"><b>Jumlah</b></td>
	 			<td><?php 
						$jumlah = 0;
							foreach ($pemain as $isi) {
								$jumlah += $isi["main"];
							}
							echo $jumlah;
					?>
				</td>
				<td><?php 
						$jumlah = 0;
							foreach ($pemain as $isi) {
								$jumlah += $isi["gol"];
							}
							echo $jumlah;
					?>
				</td>
				<td><?php 
						$jumlah = 0;
							foreach ($pemain as $isi) {
								$jumlah += $isi["assist"];
							}
							echo $jumlah;
					?>
				</td>
	 		</tr>
	 
 	</table>
 </body>
 </html>