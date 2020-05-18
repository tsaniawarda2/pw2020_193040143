<?php 
	function hitungluaslingkaran($jari)
	{
		$luas = 3.14*$jari*$jari;
		return $luas;
	}

	function tambahluas2lingkaran($luas1, $luas2)
	{
		$total_luas = $luas1+$luas2;
		return $total_luas;
	}

	// INISIALISASI VARIABEL

	 // Lingkaran pertama
		$jari1 = 7;

	 // Lingkaran kedua
		$jari2 = 14;

	 // Luas ke 1
		$luas_lkr1 = hitungluaslingkaran($jari1);

	 // Luas ke 2
		$luas_lkr2 = hitungluaslingkaran($jari2);

		echo "Total Luas = ".tambahluas2lingkaran($luas_lkr1,$luas_lkr2);
 ?>