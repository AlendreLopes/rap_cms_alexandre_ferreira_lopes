<?php

use App\Http\Controllers\ProductsImagesController;
// 
$id = $_GET['id'];
// 
$edit = (new ProductsImagesController())->edit($views, $id);