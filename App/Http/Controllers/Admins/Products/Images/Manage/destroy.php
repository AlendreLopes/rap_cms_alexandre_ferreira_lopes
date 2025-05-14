<?php

use App\Http\Controllers\ProductsImagesController;
// 
$id = $_POST['id'];
// 
$idProduct = $_POST['product_id'];
// 
$delete = (new ProductsImagesController())->delete($id);

redirect("/administrators/products/show?id={$idProduct}");