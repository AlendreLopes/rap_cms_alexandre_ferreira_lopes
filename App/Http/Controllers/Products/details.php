<?php

use App\Http\Controllers\ProductsController;
// Create query
$id = $_GET['id'];
// Title
$title = 'Product Details';
// Products Layouts
$productDetails = (new ProductsController())->showProductsSite($views, $id);