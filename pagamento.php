<?php

header('Access-Control-Allow-Origin: *');
require_once("conecta.php");

$querySelecao = "TRUNCATE TABLE tabela_carrinho";
$resultado = mysqli_query($conexao,$querySelecao); 

header("Location: http://localhost:3000/carrinho");