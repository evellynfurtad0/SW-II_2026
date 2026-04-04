<?php
$dados = file_get_contents("produtos.json");
$produtos = json_decode($dados, true);

$novo = [
    "nome"=> "Algodão", 
    "preco"=>4, 
    "quantidade"=> 3
];

$produtos[] = $novo;

$json_novo = json_encode($produtos, JSON_PRETTY_PRINT);

file_put_contents("produtos.json", $json_novo);

echo "Produto add";

?>


