<?php 
// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standar Output (sebuah perintah untuk menampilkan seseuatu ke layar)
// echo, print (mencetak isi variabel)
// print_r (mencetak isi array)
// var_dump (memberikan info tipe data dan ukuran)

echo "Tsania Warda";

var_dump("Tsania Warda");
// string(12) jumlah huruf + spasi

echo true;
// akan tampil angka 1

echo false;
// tidak akan tampil apa-apa

echo "Jum'at";
// echo 'Jum'at'; akan error


// Penulisan sintaks PHP
?>

<!-- 1. PHP di dalam HTML -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>1. PHP di dalam HTML</title>
</head>
<body>
	<h1>Halo, Selamat Datang <?php echo "Tsania"; ?></h1>
	<p><?php echo "ini adalah paragraf"; ?></p>
</body>
</html>

<!-- 2. HTML di dalam PHP -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>2. HTML di dalam PHP</title>
</head>
<body>
	<?php 	
		echo "<h1>Halo, Selamat Datang Tsania</h1>"
	?>
</body>
</html>

<?php 	
// Variabel dan Tipe Data
// Variabel (menampung sebuah nilai)
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
// $nama = "Warda";
// echo 'Halo, nama saya $nama';
// ''tidak akan jalan
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>1. PHP di dalam HTML</title>
</head>
<body>
	<h1>Halo, Selamat Datang <?php echo $nama; ?></h1>
	<p><?php echo "ini adalah paragraf"; ?></p>
</body>
</html>
