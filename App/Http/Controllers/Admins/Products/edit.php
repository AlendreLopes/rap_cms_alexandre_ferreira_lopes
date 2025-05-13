<?php

use App\Http\Controllers\ProductsController;
// 
$id = $_GET['id'];
// Administration Products Edit
$edit = (new ProductsController())->edit($views, $id);