<?php

use App\Http\Controllers\ProductsController;
// 
// Administration Products
$index = (new ProductsController())->index($views);