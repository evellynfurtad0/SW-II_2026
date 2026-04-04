<?php
$dados = file_get_contents("usuarios.json");
$usuarios = json_decode($dados);

foreach ($usuarios->usuarios as $e) {
    echo "Nome: " . $e->nome . "<br>";
    echo "Email: " . $e->email . "<br><br>";
}
?>