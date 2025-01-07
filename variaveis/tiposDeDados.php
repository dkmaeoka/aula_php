<?php

//Tipos básicos
$nome = "Rubacava";
$site = 'www.rubacava.com.br';

$ano = 1982;

$salario = 6666.66;

$bloqueado = false;

//Tipos compostos
$frutas = array(
	"abacaxi",
	"laranja",
	"uva");

echo $frutas[1];

echo "<br/>";

//objeto
$nascimento = new DateTime();

//var_dump($nascimento)
echo "<br/>";

//Tipos  especiais
$arquivo = fopen("tiposDeDados.php","r");

//var_dump($arquivo);
echo "<br/>";

$nulo = null;
echo "<br/>";


?>