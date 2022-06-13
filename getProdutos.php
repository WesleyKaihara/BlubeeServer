<?php

header('Access-Control-Allow-Origin: *');
require_once("conecta.php");

    $querySelecao = "SELECT * FROM tabela_imagens ORDER BY RAND()";
    $resultado = mysqli_query($conexao,$querySelecao);

    $produtos = [];

    while ($arquivos = mysqli_fetch_array($resultado)) {
        
     $produtos[] = [
         "ID" => $arquivos['id'],
         "CATEGORIA" => $arquivos['categoria'],
         "NOME" => $arquivos['nomeProduto'],
         "DESCRICAO" => $arquivos['descricao'],
         "VALOR" => $arquivos['valor']
     ];
    }

    echo json_encode($produtos);
    ?>
