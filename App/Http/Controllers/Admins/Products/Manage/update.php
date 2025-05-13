<?php

use App\Http\Controllers\ProductsController;
// 
// Get Current User
$user = $_SESSION['rap_cms_adm']['userId'];
// 
$id = $_POST['id'];
// 
$update = (new ProductsController())->update($id, $user);

redirect('/administrators/products');