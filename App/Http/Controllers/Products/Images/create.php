<?php

$query = "SELECT * FROM products";

$products = $connection->query($query)->fetchAll();

// Products Layout
require httpLayouts('Products/ProductsLayout.php', [
    'views' => $views,
    'products' => $products
]);
