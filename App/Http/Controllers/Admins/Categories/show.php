<?php

use App\Http\Controllers\CategoriesController;
// 
$id = $_GET['id'];
// 
$details = (new CategoriesController())->show($views, $id);