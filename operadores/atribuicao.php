<?php

    //atribuicao
    $nome = "Maeoka";

    echo $nome;

    unset ($nome);

    echo "<br/>";

    //concatenacao

    $nome = "Diego";
    $sobrenome = "Maeoka";

    echo $nome.$sobrenome;

    echo "<br/>";

    unset ($nome);

    echo "<br/>";

    //atribuicao e concatenacao

    $nome = "Diego";

    $nome .= " Maeoka";

    echo $nome;

    echo "<br/>";
    //soma / subtracao concatenada

    $valorTotal = 0;

    $valorTotal += 25;

    $valorTotal += 50;

    echo $valorTotal;

    unset ($valorTotal);

    echo "<br/>";

    $valorTotal = 100;

    $valorTotal -=  25;

    $valorTotal -= 50;

    echo $valorTotal;


?>