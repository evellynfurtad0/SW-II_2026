<?php
    //FUNÇÃO COM PARÂMETROS E SEM RETORNO
    function calcula_quadrado($a){
        $x = $a *$a;
        echo"$x <br>";
        echo"<hr>";
    }
    calcula_quadrado(4);
    calcula_quadrado(3);
    calcula_quadrado(5);
    calcula_quadrado(7);
    echo"<hr>";

    function soma($x,$y){
        $soma = $x+$y;
        echo"A soma é: $soma </br>";
    }
    
    //Passagem por referência
    $n1=5;
    $n2=8;

    soma($n1,$n2);
?>