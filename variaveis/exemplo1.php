<?php
	$nome = "WELCOME TO RUBACAVA";
	$a = 10;
	$b = 20;
	$anoNascimento = 1982;
	$anoAtual = 2024;
	$nome1 = "Diego";
	$sobrenome = "Maeoka";
	
	$nomeCompleto = $nome1." ".$sobrenome;

	echo $nome;
	echo "<br/>";

	//unset limpa a variável
	//unset($nome);

	//iset checa se a variável existe ou não
	if (isset($nome)){
		//mostra tipo e tamanho da variavel
		var_dump($nome);	
	}

	echo $a + $b;
	echo "<br/>";

	echo $nomeCompleto;
	echo "Sua idade é ";
	echo $anoAtual - $anoNascimento;
?>