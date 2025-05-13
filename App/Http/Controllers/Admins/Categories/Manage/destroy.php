<?php

use App\Http\Controllers\CategoriesController;
// 
$id = $_POST['id'];
// 
$delete = (new CategoriesController())->delete($id);

redirect('/administrators/categories');