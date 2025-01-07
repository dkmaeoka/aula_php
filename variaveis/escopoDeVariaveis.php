<?php

    $nome = "Maeoka";

    function teste(){
        global $nome;
        echo $nome;
    }

    function teste2(){
        $nome = "Maeoka1";
            echo $nome;
    }

    teste();
    echo "<br/>";
    teste2();

?>