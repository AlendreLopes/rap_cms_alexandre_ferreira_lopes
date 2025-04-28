<?php

// List products in offer

$offers = 'Outlet products';

// List products in offer
$nav = '+ Item';

// Include partial page of site navbar
require httpViews('Site/Partials/header.php', [
    '$outlet' => 'Outlet products',
    '$navbar' => $nav
]);