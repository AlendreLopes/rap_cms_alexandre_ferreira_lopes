<?php

// Base path
const BASE_PATH = '../';

// Standard PHP Library
require 'spl_autoload.php';

// Functions
require ViewsController::common('Functions.php');
// require BASE_PATH . 'App/Common/Functions.php';

require ViewsController::routers('Router.php');
// Router
$router = new Router();

// Endpoints / Routes
require ViewsController::routersEndpoint('web.php');

// REQUEST_URI ----- / Endpoint / Routes
$endpoint = parse_url($_SERVER['REQUEST_URI'])['path'];

// REQUEST_METHOD -- / Get / Post
$_method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

// Router call routes/endpoint
$router->route($endpoint, $_method);

// Route list endpoints
// $router->route_list();