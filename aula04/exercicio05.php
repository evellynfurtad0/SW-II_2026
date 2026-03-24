<?php

 function soma($vetor){
    $soma=0;
    foreach ($vetor as $valor) {
        $soma = $soma + $valor;
        echo $soma ."<br>";
    }
 }

 $numeros=[1,2,3,4,5];
 soma($numeros);
?>