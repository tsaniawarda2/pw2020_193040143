 <html>
 <head>
 	<meta charset="UTF-8">
 	<title>Latihan4d</title>
 </head>
 <body>
 	
 	<?php 

		$hardware = [

			"komponen" =>
						["hardware" => "Motherboard", "fungsi" => "Papan Sirkuit komponen komputer", "hargaBaru" => 500000, "hargaSekon" => 200000],

			"komponen1" =>
						["hardware" => "Processor", "fungsi" => "Sebuah IC yang mengontrol seluruh jalannya sistem komputer", "hargaBaru" => 300000, "hargaSekon" => 200000],

			"komponen2" =>
						["hardware" => "Hardisk", "fungsi" => "Media penyimpanan sekunder", "hargaBaru" => 800000, "hargaSekon" => 500000],
			
			"komponen3" =>			
						["hardware" => "PC Coller", "fungsi" => "Mengurangi panas yang dihasilkan oleh komputer", "hargaBaru" => 200000, "hargaSekon" => 100000],
			
			"komponen4" =>			
						["hardware" => "VGA Card", "fungsi" => "Mengolah data grafik yang akan ditampilkan oleh monitor", "hargaBaru" => 900000, "hargaSekon" => 800000],
			
			"komponen5" =>			
						["hardware" => "Optical Drive", "fungsi" => "Membaca, maupun menulis data dari kepingan CD", "hargaBaru" => 500000, "hargaSekon" => 300000],
			
			"komponen6" =>			
						["hardware" => "Card Reader", "fungsi" => "Untuk membaca data-data yang tersimpan didalam memory card", "hargaBaru" => 10000, "hargaSekon" => 5000],
			
			"komponen7" =>		
						["hardware" => "Modem", "fungsi" => "Mengubah sinyal digital menjadi sinyal analog", "hargaBaru" => 200000, "hargaSekon" => 150000]
					];

		// print_r($hardware);

		// echo $hardware["komponen"]["hardware"];

	?>

		<table border="1" cellspacing="0" cellpadding="10">

			<tr>
				
				<th>
					No.
				</th>
				<th>
					Nama Perangkat
				</th>
				<th>
					Fungsi
				</th>
				<th>
					Harga Baru
				</th>
				<th>
					Harga Sekon
				</th>

			</tr>
			
			<?php 

				$i = 1;
				foreach ($hardware as $isi) {
					
					echo "<tr>";

						echo "<td>$i</td>";
						echo "<td>".$isi['hardware']."</td>";
						echo "<td>".$isi['fungsi']."</td>";
						echo "<td>Rp.".$isi['hargaBaru']."</td>";
						echo "<td>Rp.".$isi['hargaSekon']."</td>";

					echo "</tr>";

					$i++;
				} 

			?>

			<tr>
				<td>#</td>
				<td colspan="2" align="center"><b>Jumlah</b></td>
				<td>
						<?php 
							$Total = 0;
							
							foreach ($hardware as $value) {
								$Total += $value["hargaBaru"];
							}
							
							echo "Rp. ".$Total;
						?>
				</td>
				<td>
						<?php 
							$Total = 0;
							
							foreach ($hardware as $value) {
								$Total += $value["hargaSekon"];
							}
							
							echo "Rp. ".$Total;
						?>
				</td>
			</tr>

		</table>

 </body>
 </html>