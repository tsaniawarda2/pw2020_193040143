<?php 
	$Tsania = array(
	"TTL" 				=> "Bandung, 02 Maret 2001",
	"Alamat"			=> "Cileunyi",
	"Status"			=> "Mahasiswa",
	"No hp"				=> "08xxxxxxxx",
	"Cita-cita"			=> "Sukses dunia akhirat",
	"Hobby"				=> "Nonton drama",
	"Makanan Favorit" 	=> "Ayam Goreng", 
	"Instagram"			=> "tsaniawarda",
	"Email"				=> "tsaniawarda2@gmail.com",
	"Lagu Favorit" 		=> "Kpop"
	);

	print_r($Tsania);
	
	echo "<hr>";
	
	foreach ($Tsania as $Biodata => $Isi) {
		echo "$Biodata : $Isi <br>";
	}
	
	echo "<hr>";

 ?>