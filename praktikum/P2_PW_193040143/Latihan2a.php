<?php 
	$i = 1;
	while ($i <= 3) {
		for ($j=1; $j<=3 ; $j++) { 
			echo "Ini perulangan ke ($i,$j) <br>";
		}
		$i++;
	}
 ?>



 <?php 
			if ($i % 2) {
				for ($i=1; $i <= 5; $i++) : 
				echo "<th>Kolom  $i; </th> ";
				endfor;
			} else {
				for ($i=1; $i <= 5; $i++) : 
				echo "<th>&nbsp;</th> ";
				endfor;
			}
			?>