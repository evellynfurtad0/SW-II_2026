<?php
function gera_sorteio()
{
    $num = [];
    for ($i = 1; $i < 11; $i++) {
        $sorteio = rand(1, 50);
        $num[$i] = $sorteio;
    }
    foreach ($num as $resultado) {
        echo $resultado ," - ";
    }

}

gera_sorteio();

?>