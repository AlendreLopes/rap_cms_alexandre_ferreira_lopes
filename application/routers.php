<?php

namespace Application;

function routers() : array {
    $routers = [
        '/' => 'application/views/main.php',
        '/products' => 'application/views/products.php',
        '/blog' => 'application/views/blog.php',
        '/contact' => 'application/views/contact.php',
        '/login' => 'application/views/login.php',
        '/register' => 'application/views/register.php',
        '/dashboard' => 'application/views/users/index.php',
        '/forgot-password' => 'application/views/users/partials/forgot_password.php',
    ];
    
    return $routers;
}


function controller($serverURI, $routers)
{

    $filterURI = parse_url($_SERVER['REQUEST_URI'])['path'];

    if (array_key_exists($filterURI, $routers)) {
        require $routers[$filterURI];
    } else {
        abort($errorCode = 404);
    }

}

function abort($errorCode)  {

    // http_response_code($errorCode);

    require "views/{$errorCode}.php";
}

controller($_SERVER['REQUEST_URI'], routers());