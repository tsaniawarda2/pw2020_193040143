<?php 
	$barang = [
		"barang1" => ["no" => "1", "kode" => "B001", "namabarang" => "Mouse", "harga" => 50000, "jumlah" => 3, "total" => 150000],
		"barang2" => ["no" => "2", "kode" => "B002", "namabarang" => "Keyboard", "harga" => 150000, "jumlah" => 2, "total" => 300000],
		"barang3" => ["no" => "3", "kode" => "B003", "namabarang" => "Speaker", "harga" => 300000, "jumlah" => 3, "total" => 900000],
		"barang4" => ["no" => "4", "kode" => "B004", "namabarang" => "Printer", "harga" => 1500000, "jumlah" => 2, "total" => 3000000]
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
 			<th>KODE</th>
 			<th>NAMA BARANG</th>
 			<th>HARGA</th>
 			<th>JUMLAH</th>
 			<th>TOTAL</th>
 		</tr>
	<?php 
		$i = 1;
		foreach ($barang as $data) {
			echo "<tr>";
				echo "<td align='center'>$i</td>";
				echo "<td>".$data['kode']."</td>";
				echo "<td>".$data['namabarang']."</td>";
				echo "<td>".$data['harga']."</td>";
				echo "<td align='center'>".$data['jumlah']."</td>";
				echo "<td>".$data['total']."</td>";
			echo "</tr>";
		$i++;
		}
	 ?>
 		<tr>
 			<td colspan="5" align="center">TOTAL</td>
 			<td><?php 
					$total = 0;
						foreach ($barang as $data) {
							$total = $total + $data["total"];
						}
						echo $total;
				?>
			</td>
	 	</tr>
 	</table>
 </body>
</html>
