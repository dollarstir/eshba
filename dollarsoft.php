<?php

 //  Developed By Frederick Ennin (CEO of Dollarsoft ) 
    // Contact: +233556676471
    // Email: dollarsoft463@gmail.com
    // Website: http://www.dollarstir.com
    // Youtube: http://www.youtube.com/DollarsoftCorporation
    // Started on: saturday 11th April, 2020

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