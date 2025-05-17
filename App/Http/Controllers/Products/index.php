<?php

use App\Http\Controllers\ProductsController;
// 
// Products Layout
$products = (new ProductsController)->productsSite($views);
