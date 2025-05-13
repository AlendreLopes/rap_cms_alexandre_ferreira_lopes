<?php

use App\Http\Controllers\ProductsImagesController;
// 
$id = $_GET['id'];
// 
$show = (new ProductsImagesController())->show($views, $id);