<?php

    $a = (int)7;
    $b = (string)7;

    //maior
    var_dump($a > $b);
    echo "<br/>";

    //menor
    var_dump($a < $b);
    echo "<br/>";

    //verificar se são valores iguais

    var_dump ($a == $b);
    echo "<br/>";

    //verificar se são identicos (valor + tipo)
    var_dump ($a === $b);
    echo "<br/>";

    //verificar se são valores diferentes
    var_dump ($a != $b);
    echo "<br/>";

    var_dump ($a !== $b);
    echo "<br/>";

    if ($a > $b) {

        echo "Maior valor é ";
        echo $a;

    } if ($a < $b) {

        echo "Maior valor é ";
        echo $b;

    } else {

        echo "Os valores são iguais";

    }
    echo "<br/>";

?>