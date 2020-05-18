<?php 
	function kalkulator($angka1, $angka2)
	{
		$hasil = $angka1+$angka2;
		return $hasil;
	}

	$angka1 = $_GET['angka1'];
	$angka2 = $_GET['angka2'];

	echo kalkulator($angka1,$angka2);
 ?>