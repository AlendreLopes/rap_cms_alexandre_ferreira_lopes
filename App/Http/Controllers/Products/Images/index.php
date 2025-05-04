<?php

use App\App;
use App\Common\Database\Connection;

$connection = App::resolve(Connection::class);

$query = "SELECT * FROM products";

$products = $connection->query($query)->fetchAll();

// Products Layout
require httpLayouts('Products/ProductsLayout.php', [
    'views' => $views,
    'products' => $products
]);
