<?php
$json = '{"produto": "Algodão", "preco":4, "quantidade": 3}';

    $produtos=json_decode($json,true);
    print_r($produtos);
?>

<!-- procurar no convertendo JSON para array (ou objeto) -->