<?php 
	function tumpukanBola($tumpukan){
		$i = 1;
		while ($i <= $tumpukan) {
			for ($j=1; $j <= $i ; $j++) { 
				echo "<div class='bola'>".$i."</div>";
			}
		$i++;
		echo "<br>";
		}
	}
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 	<style>
 		.bola {
			border: 1px solid black;
			border-radius: 50%;
			background-color: salmon;
			width: 30px;
			height: 30px;
			line-height: 30px;
			text-align: center;
			display : inline-block;
            margin : 3px;
 		}
 		.kotak {
 			border: 1px solid black;
 			padding: 10px;
 			width: 250px;
 		}
 	</style>
 </head>
 <body>
 	<div class="kotak">
 		<?php tumpukanBola(5) ?>
 	</div>
 </body>
 </html>