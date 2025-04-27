<?php

// Standard PHP Library
require 'spl_autoload.php';

// Functions
require ViewsController::common('Functions.php');

// Router
$router = new Router();

// Endpoint
require ViewsController::routersEndpoint('web.php');

// REQUEST_URI
$get_uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// REQUEST_METHOD
$_method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

// Router call routes/endpoint
// $router->route($get_uri, $_method);

// Route list endpoints
$router->route_list();