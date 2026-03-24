<?php
//TRABALHANDO COM ARRAYS

 function mostra_arrays($vetor){
    foreach ($vetor as $valor) {
        echo $valor ."<br>";
    }
 }

 function mostra_um($vetor2, $pos){
    echo $vetor2[$pos];
 }

 $numeros=[1,2,3,4,5];
 $nomes=['Fulano','Beltrano','Ciclano'];

 mostra_arrays($numeros);
 mostra_arrays($nomes);
 
 mostra_um($nomes,1);
?>