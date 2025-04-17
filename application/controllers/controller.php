<?php

// namespace Application\Controllers;

function controller($serverURI, $routers)
{

    $filterURI = parse_url($serverURI)['path'];

    if (array_key_exists($filterURI, $routers)) {
        // require $routers[$filterURI];
        $router = $routers[$filterURI];
        return $router;
    } else {
        abort($errorCode = 404);
    }

}

function abort($errorCode)
{

    http_response_code($errorCode);

    require "views/{$errorCode}.php";
}