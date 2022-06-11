<?php

header('Access-Control-Allow-Origin: *');
require_once("conecta.php");

    $ID = $_GET['id'];

    $querySelecao = "SELECT * FROM tabela_imagens WHERE ID = $ID";
    $resultado = mysqli_query($conexao,$querySelecao);

    $produtos = [];

    while ($aquivos = mysqli_fetch_array($resultado)) {
        
     $produtos[] = [
         "ID" => $aquivos['ID'],
         "NOME" => $aquivos['nomeProduto'],
         "DESCRICAO" => $aquivos['descricao'],
         "VALOR" => $aquivos['VALOR']
     ];
    }

    echo json_encode($produtos);
    ?>
