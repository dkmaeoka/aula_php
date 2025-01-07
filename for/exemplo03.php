<?php

    for ($i = 0; $i <= 1000; $i+=10){

        if ($i > 200 && $i < 400) continue;
        if ($i === 800) break;

        echo "<b>Valor de i = $i <p/></b>"; 

    }

?>