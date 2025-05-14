<?php

use App\Http\Controllers\ProductsImagesController;
// 
// Get Current Product
$product = $_GET['product'];
// 
$create = (new ProductsImagesController())->create($views, $product);