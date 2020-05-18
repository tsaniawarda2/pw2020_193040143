<?php

$text1 = $_GET['text1']; 
$text2 = $_GET['text2'];
$operator = $_GET['operator'];


function penjumlahan($text1, $text2,$operator){
    
    if($operator == "+"){
        $text = $text1 + $text2;
        echo "Hasilnya adalah " . $text;
        echo "<br>";
            if($text >=0 && $text<=10){
                echo  $text. "<br>";
                echo "angka satuan";
            }else if($text >=11 && $text <20){
                echo  $text. "<br>";
                echo "angka belasan";
            }else{
                echo  $text. "<br>";
                echo"angka lebih";
            }
    }else if($operator == "-"){
        $text = $text1 - $text2;
        echo "Hasilnya adalah " . $text;
        echo "<br>";
    }else if($operator == "x" || $operator == "*"){
        $text = $text1 * $text2;
        echo "Hasilnya adalah " . $text;
        echo "<br>";
    }else if($operator == "/" || $operator == ":"){
        $text = $text1 / $text2;
        echo "Hasilnya adalah " . $text;
        echo "<br>";
    }else{
        echo "masukan operator dengan benar. <br>
        +<br> -<br> * atau x<br> / atau :";
    }
                
        
        
}

penjumlahan($text1, $text2,$operator);

?>