<?php

use App\Http\Controllers\CartController;

// Cart
$cart = new CartController();
// 
$productInCart = $cart->getCartProducts();
// dd($productInCart);
// 
$index = $cart->index($views, $productInCart);