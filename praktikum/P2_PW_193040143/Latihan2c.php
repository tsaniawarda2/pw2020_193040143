<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Latihan 1c</title>
	<style>
		.kotak {
			border: 1px solid black;
			width: 130px;
			padding-top: 5px;
			padding-left: 5px;
			padding-bottom: 10px;
			
		}
		.bulat {
			border: 1px solid black;
			border-radius: 50%;
			background-color: salmon;
			width: 25px;
			text-align: center;
			line-height: 25px;
			margin: 3px;
			float: left;
		}
		.clear {
			clear: both;
		}
	</style>
</head>

<body>
	<?php 
	$a = "1";
	?>
	<div class='kotak'>
		<?php 
			while ($a <= 3) {
				for ($b=$a; $b >=1 ; $b--) { 
					echo "<div class='bulat'>$a</div>";
				}
			echo "<div class='clear'></div>";
			$a++;
			}

		 ?>

	</div>
		
	 
	
	
</body>
</html>








