<?php

use App\Common\Sessions;
use App\Common\Validations\ValidationException;
use App\Routers\Router;

session_start();

// Controllers and Views
require 'App/Http/ControllersAndViews.php';

// Functions
require appCommon('Functions.php');

// Standard PHP Library
require 'vendor/autoload.php';

// Bootstrap
require app('Bootstrap.php');

// Router
$router = new Router();

// Endpoint
require routesEndpoint('web.php');

// REQUEST_URI to Endpoint/Routes
$endpoint = parse_url($_SERVER['REQUEST_URI'])['path'];

// REQUEST_METHOD
$_method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

// Router call routes/endpoint
// $router->route($endpoint, $_method);
try {

    $router->route($endpoint, $_method);
    if (isset($_SESSION['success'])) {
        unset($_SESSION['success']);
    }
    if (isset($_SESSION['error'])) {
        unset($_SESSION['error']);
    }

} catch (ValidationException $exception) {

    Sessions::flash('errors', $exception->errors);
    Sessions::flash('oldData', $exception->oldData);

    return redirect($router->previousUrl());

}

// Go to DOCs
// To see routes/endpoins run this
// Route list endpoints
// $router->route_list();

// Migrations
// $migrations = new Migrations();
// $migrations->Seed();

// To run app do
// npm install
// composer install

// Go to App/Common/Config to access main.php file
//  and set configuration DATABASE

// Migrations
// Run Migrations to fill database run this
// $migrations = new Migrations();
// $migrations->Seed();

// Destroy SESSIONS
Sessions::unflash();
