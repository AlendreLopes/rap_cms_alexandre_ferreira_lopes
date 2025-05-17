<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\UsersController;
// 
// Cart
$products = (new CartController())->getCartProducts();
// 
$store = (new UsersController())->ordersCreate( $products);
// 
redirect('/dashboard/payments/create');
