<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Latihan 3b</title>
	<style>
		.style {
			font-size: 20px;
			font-family: arial;
			font-style: italic;
		}
		.kotak {
			border: 1px solid black;
			padding: 20px;
			width: 95%;
		}
	</style>
</head>
<body>
	<div class="kotak">
		<?php 
			$jawabanIsset = "<b>Isset adalah = </b>fungsi yang menentukan apakah suatu variabel telah didefinisikan dan variabel tersebut isinya bukan NULL.<br>";
			$jawabanEmpty = "<b>Empty adalah = </b>fungsi yang memeriksa apakah sebuah variabel memiliki value<br>";

			$GLOBALS['issets'] = $jawabanIsset;
			$GLOBALS['empty'] = $jawabanEmpty; 

			function soal($style){
				echo "<div class='$style'>".
				$GLOBALS['issets'].
				$GLOBALS['empty'].
				"</div>";
			}
			soal("style");
		 ?>
	 </div>
</body>
</html>

