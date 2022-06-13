<?php

header('Access-Control-Allow-Origin: *');
require_once("conecta.php");

$querySelecao = "SELECT * FROM tabela_carrinho C INNER JOIN tabela_imagens I ON C.id_produto = I.id";
$resultado = mysqli_query($conexao,$querySelecao); 

$produtos = [];

while ($produto = mysqli_fetch_array($resultado)) {
    
 $produtos[] = [
     "ID" => $produto['id'],
     "NOME" => $produto['nomeProduto'],
     "QUANTIDADE" => $produto['quantidade'],
     "VALOR" => $produto['valor']
 ];
}

echo json_encode($produtos);
