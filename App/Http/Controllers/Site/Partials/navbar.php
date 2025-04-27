<?php

// List products in offer

$offers = 'Outlet products';
// Include partial page of site navbar
require ViewsController::views('Site/Partials/navbar.php', [
    'outlet' => $offers
]);