<?php
header('Access-Control-Allow-Origin: *');
$cepOrigem = $_GET["cep"];
$cepDestino = "87303070";
$peso = 2;
$valor = 1000;
$servicos = ['04014','04510'];
$altura = 10;
$largura = 20;
$comprimento = 20;


$fretes = [];
// Codigo
// PrazoEntrega
// Valor
foreach($servicos as $item) {
  $url = "http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?";
  $url .= "nCdEmpresa=";
  $url .= "&sDsSenha=";
  $url .= "&sCepOrigem=". $cepOrigem;
  $url .= "&sCepDestino=". $cepDestino;
  $url .= "&nVlPeso=". $peso;
  $url .= "&nVlLargura=". $largura;
  $url .= "&nVlAltura=". $altura;
  $url .= "&nCdFormato=1";
  $url .= "&nVlComprimento=". $comprimento;
  $url .= "&sCdMaoPropria=n";
  $url .= "&nCdServico=".$item;
  $url .= "&nVlValorDeclarado=".$valor;
  $url .= "&sCdAvisoRecebimento=n";
  $url .= "&nVlDiametro=0";
  $url .= "&StrRetorno=xml";

  $xml = simplexml_load_file($url);
  
  $dados = ($xml->cServico);
  $fretes[] = [
    "ID" => $dados->Codigo,
    "prazoEntrega" => $dados->PrazoEntrega,
    "valor" => $dados->Valor
  ];
};

echo json_encode($fretes);





