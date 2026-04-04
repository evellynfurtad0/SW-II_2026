<?php
$nomeBusca = $_GET["produto"] ?? "Acetona";

$dados = file_get_contents("produtos.json");
$produtos = json_decode($dados, true);

$novoArray = [];

foreach ($produtos as $produto) {
    if ($produto["produto"] != $nomeBusca) {
        $novoArray[] = $produto;
    }
}

$json_novo = json_encode($novoArray, JSON_PRETTY_PRINT);

file_put_contents("produtos.json", $json_novo);

echo "Produto removido";
?>