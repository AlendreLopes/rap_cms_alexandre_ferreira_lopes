<?php

// Routers
$router = require ViewsController::routersEndpoint('web.php');

function endipoint($serverURI, $router): string
{

    $filterURI = parse_url($serverURI)['path'];

    if (array_key_exists($filterURI, $router)) {

        return $router[$filterURI];

    } else {

        require ViewsController::controllers("errors/404.php");
        die();
    }

}

// Get routers to controller
$views = endipoint($_SERVER['REQUEST_URI'], $router['site']);
