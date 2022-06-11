<?php

header('Access-Control-Allow-Origin: *');
require_once("conecta.php");

$id_produto = $_GET['id'];
$quantidade = 1;


$querySelecao = "INSERT INTO tabela_carrinho (id_produto,quantidade)
VALUES ($id_produto,$quantidade)";
$resultado = mysqli_query($conexao,$querySelecao); 

header("Location: http://localhost:3000/ProdutoInfo/$id_produto");