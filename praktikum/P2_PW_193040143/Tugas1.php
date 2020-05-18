<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Kotak</title>
	<style>
		.kotak {
			border: 1px solid black;
			padding: 5px;
			width: 188px;
		}
		.biru {
			border: 1px solid black;
			width: 25px;
			height: 25px;
			margin: 2px;
			background-color: lightblue;
			float: left;
		}
		.salmon {
			border: 1px solid black;
			width: 25px;
			height: 25px;
			margin: 2px;
			background-color: salmon;
			float: left;
		}
		.clear {
			clear: both;
		}
	</style>
</head>
<body>
	<?php 
		$a = 1;
		$b = 1;
	?>
	<div class="kotak">
		<?php 
			while ($a <= 6) {

				if ($a % 2) {
					for ($b=1; $b <= 6; $b++) { 
						if ($b % 2) {
							echo "<div class='biru'></div>";
						}
						else {
							echo "<div class='salmon'></div>";
						}
					}echo "<div class='clear'></div>";
				}
				else {
					for ($b=1; $b <= 6; $b++) { 
						if ($b % 2) {
							echo "<div class='salmon'></div>";
						}
						else {
							echo "<div class='biru'></div>";
						}
					}echo "<div class='clear'></div>";
				}
			$a++;
			}
		 ?>
	 </div>
</body>
</html>