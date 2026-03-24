<?php
    function num($num1){
        for ($i=1; $i < 11; $i++) { 
            $tabuada = $i*$num1;
            echo"$num1 * $i = $tabuada <br>";
        }
    }
    $num1=2;
    echo num($num1);
?>