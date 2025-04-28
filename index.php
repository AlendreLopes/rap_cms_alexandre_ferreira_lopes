<?php


use App\Routers\Router;

// Controllers and Views
require 'App/ControllersAndViews.php';

// Standard PHP Library
require app('SPLAutoload.php');

// Functions
require app('Functions.php');

// App

// Bootstrap
require app('Bootstrap.php');


// Router
$router = new Router();

// Endpoint
require routesEndpoint('web.php');

// REQUEST_URI to Endpoint/Routes
$endpoint = parse_url($_SERVER['REQUEST_URI'])['path'];

// REQUEST_METHOD
$_method  = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

// // Router call routes/endpoint
$router->route($endpoint, $_method);

// Route list endpoints
// $router->route_list();
