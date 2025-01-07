<?php

    $json = '[{"nome":"Diego","idade":"43"},{"nome":"Jaqueline","idade":"42"}]';

    $data = json_decode($json, true);

    var_dump ($data);

?>