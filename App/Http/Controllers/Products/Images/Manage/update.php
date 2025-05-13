<?php

use App\Http\Controllers\ProductsImagesController;
// 
$id = $_GET['id'];
// 
$update = (new ProductsImagesController())->update($id);