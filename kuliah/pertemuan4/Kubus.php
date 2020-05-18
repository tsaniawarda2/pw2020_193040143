<?php 
	function hitungluaskubus($sisi){
			$luas = $sisi*$sisi*6;
			return $luas;
		}

	function tambahluas2kubus($luas1, $luas2)
		{
			$total_luas = $luas1+$luas2;
			return $total_luas; // return hanya untuk memproses dan membalikkan nilai
		}

	// INISIALISASI VARIABEL
		// Kubus Pertama
			$sisi1 = 10;

		// Kubus Kedua
			$sisi2 = 2;
		// Luas ke-1

			$luas_kb1 = hitungluaskubus($sisi1);
			// $luas_kb1 = $sisi1*$sisi1*6;

		// Luas ke-2
			$luas_kb2 = hitungluaskubus($sisi2);
			// $luas_kb2 = $sisi2*$sisi2*6;

		echo "Total luas = ".tambahluas2kubus($luas_kb1,$luas_kb2);









	// Cara Lain
	// $total_luas = $luas_kb1+$luas_kb2;
	// echo "Total Luas = ".$total_luas;
	
	

	
 ?>