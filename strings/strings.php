<?php

    $nome = "kiyoshi maeoka";
   
    //diferenca entre aspas simples e aspas duplas
    echo "Diego $nome";
    echo "<br/>";
    echo 'Diego $nome';
    echo "<br/>";

    //deixar caracteres todos maiusculos
    echo strtoupper($nome);
    echo "<br/>";

    //somente primeira letra da primeira palavra
    echo ucwords($nome);
    echo "<br/>";

    //primeira letra de todas as palavras
    echo ucfirst($nome);
    echo "<br/>";

    //substituir informacao
    $nome = str_replace("kiyoshi","Kiyoshi",$nome);
    $nome = str_replace("maeoka","Maeoka",$nome);
    echo $nome;
    echo "<br/>";

    //
    $q = strpos($nome,"Maeoka");
    var_dump($q);
    echo "<br/>";

    $t = substr($nome,0,$q);
    var_dump($t);
    echo "<br/>";

?>