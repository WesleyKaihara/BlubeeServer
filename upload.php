<?php
require("conecta.php");
$nomeProduto = $_POST['produto'];
$categoria = $_POST['categoria'];
$descricaoProduto = $_POST['descricao'];
$VALOR = $_POST['valor'];
$imagem = $_FILES['imagem']['tmp_name'];
$tamanho = $_FILES['imagem']['size'];
$tipo = $_FILES['imagem']['type'];
$nome = $_FILES['imagem']['name'];

if ( $imagem != "none" ){
    $fp = fopen($imagem, "rb");
    $conteudo = fread($fp, $tamanho);
    $conteudo = addslashes($conteudo);
    fclose($fp);

$queryNovoProduto = "INSERT INTO tabela_imagens (
    nomeProduto,
    categoria,
    descricao,
    VALOR ,
    nome_imagem,
    tamanho_imagem, 
    tipo_imagem, imagem) 
    VALUES (
        '$nomeProduto',
        '$categoria',
        '$descricaoProduto',
        '$VALOR',
        '$nome',
        '$tamanho', 
        '$tipo',
        '$conteudo')";

mysqli_query($conexao,$queryNovoProduto) 
or die("Algo deu errado ao inserir o registro. Tente novamente.");

echo 'Registro inserido com sucesso!';

header('Location: http://localhost:3000/produtos');
    if(mysql_affected_rows($conexao) > 0)
        print "A imagem foi salva na base de dados.";
    else
        print "Não foi possível salvar a imagem na base de dados.";
    }
else
    print "Não foi possível carregar a imagem.";
?>