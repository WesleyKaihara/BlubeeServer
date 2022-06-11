<?php
header('Access-Control-Allow-Origin: *');
require("conecta.php");
$codigo = $_GET["id"];
$sqlExclusao = "DELETE FROM tabela_imagens WHERE ID = '$codigo' ";
$queryExclusao = mysqli_query($conexao,$sqlExclusao)
or die("Algo deu errado ao excluir a imagem. Tente novamente.");
echo 'Imagem excluída com sucesso!';
header('Location: ver_imagens.php');
?>