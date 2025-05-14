<?php

use App\Http\Controllers\ProductsImagesController;
// 
// Get Current User
$user = $_SESSION['rap_cms_adm']['userId'];
// 
$id = $_POST['id'];
// 
$update = (new ProductsImagesController())->update($id, $user);

redirect('/administrators/products/images');