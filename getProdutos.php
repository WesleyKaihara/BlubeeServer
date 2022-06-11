<?php

header('Access-Control-Allow-Origin: *');
require_once("conecta.php");

    $querySelecao = "SELECT * FROM tabela_imagens ORDER BY RAND()";
    $resultado = mysqli_query($conexao,$querySelecao);

    $produtos = [];

    while ($arquivos = mysqli_fetch_array($resultado)) {
        
     $produtos[] = [
         "ID" => $arquivos['ID'],
         "CATEGORIA" => $arquivos['categoria'],
         "NOME" => $arquivos['nomeProduto'],
         "DESCRICAO" => $arquivos['descricao'],
         "VALOR" => $arquivos['VALOR']
     ];
    }

    echo json_encode($produtos);
    ?>
