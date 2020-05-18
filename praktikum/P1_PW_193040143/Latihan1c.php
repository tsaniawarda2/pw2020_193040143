<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Latihan 1c</title>
	<style>
		.kotak {
			border: 1px solid black;
			width: 170px;
			padding-top: 5px;
			padding-left: 5px;
			padding-bottom: 20px;
			float: left;
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
	$a = "A";
	$b = "B";
	$c = "C";
	 ?>
	<div class="kotak">
	<!-- Baris 1 -->
		<div class="bulat">
			<?php echo $a; ?>
		</div>
		<div class="clear"></div>
	<!-- Baris 2 -->
		<div class="bulat">
			<?php echo $b; ?>
		</div>
		<div class="bulat">
			<?php echo $b; ?>
		</div>
		<div class="clear"></div>
	<!-- Baris 3 -->
		<div class="bulat">
			<?php echo $c; ?>
		</div>
		<div class="bulat">
			<?php echo $c; ?>
		</div>
		<div class="bulat">
			<?php echo $c; ?>
		</div>

	</div>
	
</body>
</html>