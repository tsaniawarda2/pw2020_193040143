<?php 
	$bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

	$angka = array(5,2,6,4,3,1);

	// echo $bulan[6]; memanggil index ke-6


	// ARRAY POP
	// menghapus elemen terakhir
	$hasil = array_pop($bulan);
	print_r($bulan);

	echo "<hr>";


	// ARRAY PUSH
	// menambahkan elemen
	$hasil =  array_push($angka, 10,9,8,7);
	print_r($angka);

	echo "<hr>";


	// RSORT
	// menambahkan elemen array (ascending)
	$hasil = rsort($angka);
	print_r($angka);

	echo "<hr>";


	// SORT 
	// menambahkan elemen array (descending)
	$hasil = sort($angka);
	print_r($angka);

 ?>