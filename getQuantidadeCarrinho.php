<?php

header('Access-Control-Allow-Origin: *');
require_once("conecta.php");

    $querySelecao = "SELECT * FROM tabela_carrinho";
    $resultado = mysqli_query($conexao,$querySelecao);

    $carrinho = [];

    while ($arquivos = mysqli_fetch_array($resultado)) {
        
     $carrinho[] = [
         "ID_PRODUTO" => $arquivos['id_produto'],
         "QUANTIDADE" => $arquivos['quantidade']
     ];
    }

    echo json_encode($carrinho);
    ?>