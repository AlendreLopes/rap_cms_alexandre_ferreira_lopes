<?php

// Routers
$routers = require Views::routers('routers.php');

function callViewController($serverURI, $routers): string
{

    $filterURI = parse_url($serverURI)['path'];

    if (array_key_exists($filterURI, $routers)) {

        return $routers[$filterURI];

    } else {

        return abort($errorCode = 404);

    }

}

function abort($errorCode): string
{

    http_response_code($errorCode);

    return Views::views("site/{$errorCode}.php");

}

function callView($serverURI, $routers): string
{

    // Get result
    $router = callViewController($serverURI, $routers);

    // Trait routers
    $traitURI= explode('/', $router);
    
    if (count($traitURI) > 2) {
        $getFileAndExtension = explode('.', $traitURI[2]);
        $returnFile = $getFileAndExtension[0];
        $returnextention = $getFileAndExtension[1];
        $returnURI = "{$traitURI[0]}/{$traitURI[1]}/{$returnFile}.view.{$returnextention}";

    } else {
        $getFileAndExtension = explode('.', $traitURI[1]);
        $returnFile = $getFileAndExtension[0];
        $returnextention = $getFileAndExtension[1];
        $returnURI = "{$traitURI[0]}/{$returnFile}.view.{$returnextention}";
    }
    
    // Create routers
    return $returnURI;

}

// Get routers to controller
$controller = callViewController($_SERVER['REQUEST_URI'], $routers['endpoints']['site']);
// Create uri to throw slot to GuestLayout page
$view = callView($_SERVER['REQUEST_URI'], $routers['endpoints']['site']);
