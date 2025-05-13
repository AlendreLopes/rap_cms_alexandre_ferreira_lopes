<?php

use App\Http\Controllers\CategoriesController;
// 
$id = $_GET['id'];
// 
$users = (new CategoriesController())->edit($views, $id);