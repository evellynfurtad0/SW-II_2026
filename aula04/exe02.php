<?php
    //FUNÇÃO SEM PARÂMETROS E COM RETORNO
    function exibe_msg(){
        $x=12;
        return $x;
    }
    echo exibe_msg()*2;
    //ou pode criar uma variavel antes e dps multiplicar tipo: 
    // $abc=exibe_msg(); 
    // echo $abc*2
?>