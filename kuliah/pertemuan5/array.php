<?php 
	
	// ARRAY 1 DIMENSI
	$arah = array("Kanan", "Kiri"); // index 0 kanan index 1  kiri

	$arah[2] = "Atas"; // menentukan index
	//echo $arah;

	$arah[] = "Bawah"; // mengikuti index sebelumnya

	$arah[1] = "Kanan";
	$arah[0] = "Kiri";

	echo "Panjang Array = ".count($arah);
	echo "<br>";
	print_r($arah);

	echo "<br>==========FOR==========<br>";

	for ($i=0; $i < count($arah); $i++) { 
		echo "Arah = ".$arah[$i];
		echo "<br>";
	}

	echo "<br>==========FOREACH==========<br>";

	$i=1;
	foreach ($arah as $namaarah) {
		echo $namaarah;
	}

	echo "<hr>";

	// ARRAY MULTIDIMENSI
	$mahasiswa = array();
	$mahasiswa[0][0] = "193040143";
	$mahasiswa[0][1] = "Tsania Warda Listianisari";
	$mahasiswa[1][0] = "Bandung";
	$mahasiswa[1][1] = "08xxxxxxxx";

	print_r("<pre>".print_r($mahasiswa,true)."</pre>");
	echo "<br>";
	var_dump($mahasiswa);


	echo "<hr>";
	// ARRAY DENGAN LOOPING
	// echo "Nama : ".$mahasiswa[0][1];
	// echo "<br>";
	// echo "Kota : ".$mahasiswa[1][0];

	for ($i=0; $i < count($mahasiswa); $i++) { // baris
		for ($j=0; $j < count($mahasiswa); $j++) { // kolom
			echo $mahasiswa[$i][$j];
			echo "<br>";
		}
	}

 ?>

























