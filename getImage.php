<?php
header('Access-Control-Allow-Origin: *');
require("conecta.php");

$id_imagem = $_GET["id"];
$querySelecionaPorCodigo = "SELECT ID,
imagem FROM tabela_imagens WHERE ID = $id_imagem";
$resultado = mysqli_query($conexao,$querySelecionaPorCodigo);
$imagem = mysqli_fetch_object($resultado);
Header( "Content-type: image/gif");
echo $imagem->imagem;