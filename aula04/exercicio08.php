<?php
    function gera_numero(){
        $sorteio = rand(1,50);
        echo $sorteio ."<br>";
    }

    for ($i=1; $i < 11 ; $i++) { 
        gera_numero();    
    }

    //falta fazer

?>