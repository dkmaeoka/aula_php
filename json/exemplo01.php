<?php
  
    $pessoas = array();
    array_push($pessoas, array(
        'nome' => 'Diego',
        'idade' => '43'
    ));

    array_push($pessoas, array(
        'nome' => 'Jaqueline',
        'idade' => '42'

    ));

    echo json_encode($pessoas);

?>