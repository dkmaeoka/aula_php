<?php
    $nome = (string)$_GET["a"];
    $sobrenome = (string)$_GET["b"];
    
    echo $nome ;
    echo "<br/><b/>";
    echo $sobrenome;

    echo "<br/>";

    //var_dump($nome);

    $ip = $_SERVER["REMOTE_ADDR"];

    if ($ip == "127.0.0.1"){
    echo "<b/>";
    echo $ip;
    }else{
        echo "IP ERRADO";
    }
?>