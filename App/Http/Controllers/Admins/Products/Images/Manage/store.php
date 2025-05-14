<?php

use App\Http\Controllers\ProductsImagesController;
// // 
// dd($_FILES);
// // Get Current Adm
$adm = $_SESSION['rap_cms_adm']['userId'];
// 
$store = (new ProductsImagesController())->store($adm);

redirect("/administrators/products/show?id={$_POST['product_id']}");