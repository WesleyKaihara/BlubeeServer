<?php

header('Access-Control-Allow-Origin: *');
require_once("conecta.php");

    $ID = $_GET['id'];

    $querySelecao = "SELECT * FROM tabela_imagens WHERE id = $ID";
    $resultado = mysqli_query($conexao,$querySelecao);

    $produtos = [];

    while ($aquivos = mysqli_fetch_array($resultado)) {
        
     $produtos[] = [
         "ID" => $aquivos['id'],
         "NOME" => $aquivos['nomeProduto'],
         "DESCRICAO" => $aquivos['descricao'],
         "VALOR" => $aquivos['valor']
     ];
    }

    echo json_encode($produtos);
    ?>
