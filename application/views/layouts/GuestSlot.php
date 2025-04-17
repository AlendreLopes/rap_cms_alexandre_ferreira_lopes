<?php

// Get controller of routers

// Controllers
include 'application/controllers/controller.php';

// Routers
$routers = include 'application/routers.php';

// This a generic slot to hold all uri
$router = controller($_SERVER['REQUEST_URI'], $routers['endpoints']['site']);

// Create uri to throw slot to GuestLayout page
$explode = explode('/', $router);

// Slot
$getSlot = "{$explode[0]}/controllers/{$explode[2]}/{$explode[3]}.view.php";

// To throw endPoint
include "{$router}.php";
// dd($explode);