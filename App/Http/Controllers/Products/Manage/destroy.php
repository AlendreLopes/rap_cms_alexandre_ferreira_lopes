<?php

use App\Http\Controllers\ProductsController;
// 
$id = $_GET['id'];
// 
$delete = (new ProductsController())->delete($id);