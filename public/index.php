<?php

// Base path
const BASE_PATH = '../';

// Standard PHP Library
require BASE_PATH . 'spl_autoload.php';

// Functions
require ViewsController::common('functions.php');

// Router
require ViewsController::routers('router.php');
// dd($views);

// Site Router
require ViewsController::controllers($views, [
    'views' => $views
]);

