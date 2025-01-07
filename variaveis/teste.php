<?php
 
function setMessage() {
 
    $message = 'Hello World';
    global $message;
}

setMessage(); 
echo $message;
 
?>