<?php

use App\Http\Controllers\CartController;
use App\Http\Models\CartProduct;

// 
$id = strip_tags($_POST['id']);
// Cart
$cart = new CartController();
// Get Product
$getProduct = $cart->getProduct($id);
// dd($getProduct);
// Set Cart Product 
$productCart = new CartProduct();
$productCart->setId($getProduct['id']);
$productCart->setName($getProduct['name']);
$productCart->setDescription($getProduct['description']);
$productCart->setPrice($getProduct['price']);
$productCart->setQuantity(1);
$productCart->setImage($getProduct[0]['file_path'] . $getProduct[0]['file']);
// Cart
$cart->add($productCart);

redirect("/");