<?php 
// str_replace()
	$lirik = 
		"Balonku ada lima <br>
		Rupa-rupa warnanya <br>
		Hijau, kuning, kelabu <br>
		Merah muda dan biru <br>
		Meletus balon hijau DOR! <br>
		Hatiku sangat kacau <br>
		Balonku tinggal empat <br>
		Kupegang erat-erat";
	$lirik1 = str_replace("a", "o", $lirik);
	$lirik2 = str_replace("i", "o", $lirik1);
	$lirik3 = str_replace("u", "o", $lirik2);
	$lirik4 = str_replace("e", "o", $lirik3);

	echo "$lirik4"; 

// bisa juga variabelnya hanya $lirik
	// $lirik = str_replace("a", "o", $lirik);
	// $lirik = str_replace("i", "o", $lirik);
	// $lirik = str_replace("u", "o", $lirik);
	// $lirik = str_replace("e", "o", $lirik);
	
?>