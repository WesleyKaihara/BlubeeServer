<?php

header('Access-Control-Allow-Origin: *');
require_once("conecta.php");

$querySelecao = "SELECT * FROM tabela_carrinho C INNER JOIN tabela_imagens I ON C.id_produto = I.ID";
$resultado = mysqli_query($conexao,$querySelecao); 

$produtos = [];

while ($produto = mysqli_fetch_array($resultado)) {
    
 $produtos[] = [
     "ID" => $produto['ID'],
     "NOME" => $produto['nomeProduto'],
     "QUANTIDADE" => $produto['quantidade'],
     "VALOR" => $produto['VALOR']
 ];
}

echo json_encode($produtos);
