<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Latihan 1</title>
</head>
<body>
	<table border="1" cellpadding="3" cellspacing="0">
		<tr>
			<th>Kolom 1</th>
			<th>Kolom 2</th>
			<th>Kolom 3</th>
			<th>Kolom 4</th>
			<th>Kolom 5</th>
		</tr>
		<?php 
			$a = 1;

			while ($a <= 5) {
				echo "<tr>";

				if ($a % 2) {
					for ($b = 1; $b <= 5; $b++) { 
						echo "<td>Baris $a, Kolom $b</td>";
					}

				} else {
					for ($b=1; $b <= 5 ; $b++) { 
						echo "<td>&nbsp;</td>";
					}
				}
				echo "</tr>";

				$a++;
				}
			
		 ?>
	</table>
</body>
</html>