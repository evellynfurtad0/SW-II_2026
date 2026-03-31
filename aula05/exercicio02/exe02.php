<?php
$dados = file_get_contents("usuarios.json");
$usuarios = json_decode($dados, true);

print_r($usuarios);
?>