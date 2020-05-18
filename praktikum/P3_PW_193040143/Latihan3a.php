<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Latihan 3a</title>
	<style>
		.ganti_style{
			font-size: 28px;
			font-family: arial;
			color: #8c782d;
			font-style: italic;;
			font-weight: bolder;
		}
		.box_model{
			width: 600px;
			padding: 12px;
			border: 1px solid black;
			box-shadow: 1px 1px 15px rgba(0,0,0.5);
			border-radius: 5px;
		}
	</style>
</head>
<body>
	<?php 
		function gantiStyle($tulisan, $style1, $style2){
			echo "<div class='$style1'><p class='$style2'>$tulisan</p></div>";
		}
		gantiStyle("Selamat datang di praktikum PW 2020", "ganti_style", "box_model")
	 ?>
</body>
</html>







