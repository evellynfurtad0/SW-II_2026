<?php
    function fatorial($n){
        $fat=1;
        for ($i=$n; $i >= 1; $i--) { 
            $fat = $fat*$i;
        }
        return $fat;
    }
    $num=5;
    echo "O fatorial é:" .fatorial($num);
?>