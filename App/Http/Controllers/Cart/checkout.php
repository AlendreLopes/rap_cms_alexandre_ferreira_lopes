<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\UsersController;
// 
// Get Current User
$id = $_SESSION['rap_cms']['userId'];
// 
$userData = (new UsersController())->userDataCheckout($id);
$userAddress = (new UsersController())->userAddressCheckout($id);
// 
$cart = new CartController();
// Get Cart
$cartProducts = $cart->getCartProducts();
// 
// Get Cart Products Amount
$cartProductsTotalAmount = $_SESSION['rap_cms_cart']['total'];
// 
$checkout = $cart->checkout($views, $cartProducts,  $cartProductsTotalAmount,  $userData, $userAddress);