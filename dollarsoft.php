<?php

session_start();
include 'core.php';

$dollar = $_GET['dollar'];

if (function_exists($dollar)) {

    $dollar();
    # code...
}
else{
    echo "something Wrong Contact Developer +233556676471";
}


?>