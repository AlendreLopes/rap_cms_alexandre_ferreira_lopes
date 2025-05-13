<?php

use App\Http\Controllers\ProductsImagesController;
// 
$id = $_GET['id'];
// 
$delete = (new ProductsImagesController())->delete($id);