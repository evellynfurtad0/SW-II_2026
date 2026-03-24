<?php
    function num($x){
        if ($x % 2 ==0) {
           echo "PAR";
        }else{
            echo "IMPAR";
        }
    }
    $num1=3;
    echo num($num1);
?>