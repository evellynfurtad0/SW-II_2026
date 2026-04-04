<?php
$busca = $_GET["email"] ?? "ana@gmail.com";

$dados = file_get_contents("usuarios.json");
$usuarios = json_decode($dados); 

$encontrado = false;

foreach ($usuarios->usuarios as $usuario) {
    if ($usuario->email == $busca) {
        echo "ID: " . $usuario->id . "<br>";
        echo "Nome: " . $usuario->nome . "<br>";
        echo "Email: " . $usuario->email . "<br>";
        $encontrado = true;
        break;
    }
}

if (!$encontrado) {
    echo "Usuário não encontrado!";
}
?>