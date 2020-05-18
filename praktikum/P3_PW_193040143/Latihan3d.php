<?php 
    function hitungDeterminan($a, $b, $c, $d) {
        // Rumus
        $rumus=(($a*$d)-($b*$c));

        // Menampilkan Matriks
        echo "<table style='border-left: 2px solid black; border-right: 2px solid black;' cellspacing='5' cellpadding='5'>
                 <tr>
                     <td>$a</td>
                     <td>$b</td>
                 </tr>
                 <tr>
                     <td>$c</td>
                     <td>$d</td>
                 </tr>
             </table>";
             echo "<br>";
        echo "<b>Determinan dari matriks tersebut adalah $rumus</b>";
    }
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <title>Latihan 3d</title>
     <style>
         .kotak {
            border: 1px solid black;
            padding: 20px;
            width: 300px;
         }
     </style>
 </head>
 <body>
    <div class="kotak">
        <?php hitungDeterminan(1,2,3,4)?>
    </div>
 </body>
 </html>
 