<?php

// List products in offer

// $offers = 'Outlet products';

// Include partial page of site header
// require ViewsController::views('Site/Partials/header.php');

// Include partial page of site navbar
require ViewsController::views('Site/Partials/header.php', [
    'outlet' => 'Outlet products'
]);