<?php

// namespace Application\Controllers;

include 'routers.php';

function controller($serverURI, $routers){

    $filterURI = parse_url($_SERVER['REQUEST_URI'])['path'];

    if (array_key_exists($filterURI, $routers)) {
        require $routers[$filterURI];
    } else {
        require 'application/views/404.php';
    }
    
}

controller($_SERVER['REQUEST_URI'], routers());
