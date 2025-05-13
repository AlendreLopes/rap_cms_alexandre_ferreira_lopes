<?php

use App\Http\Controllers\ProductsController;
// 
$id = $_POST['id'];
// 
$delete = (new ProductsController())->delete($id);

redirect('/administrators/products');