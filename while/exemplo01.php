<?php

    $i = true;

    while ($i){

        $numero = rand(1,10);

        if ($numero === 3) {

            echo "Tres<br>";

            $i = false ;
        } else {

            echo $numero."<br>";

        }
    }

?>