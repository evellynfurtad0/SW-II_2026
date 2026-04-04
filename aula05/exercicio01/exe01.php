<?php
$dados = [
    array(
    "nome"=>"Esmalte", 
    "preco"=>2, 
    "quantidade"=> 5
    ),
    array(
    "nome"=>"Acetona", 
    "preco"=>5, 
    "quantidade"=> 2
    ),
    array(
        "nome"=> "Lixa",
        "preco"=> 3,
        "quantidade"=> 1
    )
];

    $json=json_encode($dados, JSON_PRETTY_PRINT);
    file_put_contents("produtos.json", $json);
?>