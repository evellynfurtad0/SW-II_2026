<?php
$dados = [
    array(
    "produto"=>"Esmalte", 
    "preco"=>2, 
    "quantidade"=> "5"
    ),
    array(
    "produto"=>"Acetona", 
    "preco"=>5, 
    "quantidade"=> "2"
    ),
    array(
        "produto"=> "Lixa",
        "preco"=> 3,
        "quantidade"=> "1"
    )
];

    $json=json_encode($dados, JSON_PRETTY_PRINT);
    file_put_contents("produtos.json", $json)
?>