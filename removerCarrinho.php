<?php

header('Access-Control-Allow-Origin: *');
require_once("./conecta.php");

$id_produto = $_GET['id'];

$querySelecao = "DELETE FROM tabela_carrinho WHERE id_produto = $id_produto";
$resultado = mysqli_query($conexao,$querySelecao); 

header("Location: http://localhost:3000/carrinho");