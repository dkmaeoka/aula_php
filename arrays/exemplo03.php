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

    print_r ($pessoas);

    echo "<br/>";

    echo $pessoas[0]['nome'];
  
  ?>