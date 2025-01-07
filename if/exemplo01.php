<?php

    $qualASuaIdade = $_GET["a"];;

    $idadeCrianca = 12;
    $idadeMaior = 18;
    $idadeIdoso = 65;

    if($qualASuaIdade < $idadeCrianca) {

        echo "Individuo é uma criança de <b>$qualASuaIdade</b> anos.";
    } elseif ($qualASuaIdade < $idadeMaior) {

        echo "Indivíduo é um adolescente de <b>$qualASuaIdade</b> anos.";
    } elseif ($qualASuaIdade < $idadeIdoso) {
        echo "Indivíduo é um adulto de <b>$qualASuaIdade</b> anos.";
    } else {
        echo "Indivíduo é um idoso de <b>$qualASuaIdade</b> anos.";
    }

    echo "<br>";

    //operador ternário
    echo ($qualASuaIdade < $idadeMaior)?"Individuo é uma criança de $qualASuaIdade anos.":"Indivíduo é um adulto de $qualASuaIdade anos.";
?>