<?php

use App\Http\Controllers\ProductsController;
// 
// Get Current User
$user = $_SESSION['rap_cms_adm']['userId'];
// 
$store = (new ProductsController())->store( $user);

redirect('/administrators/products');