<?php

use App\Http\Controllers\ProductsController;
// 
$id = $_GET['id'];
// Administration Products Show
$show = (new ProductsController())->show($views, $id);