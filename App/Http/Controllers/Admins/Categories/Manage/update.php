<?php

use App\Http\Controllers\CategoriesController;
// 
$update = (new CategoriesController())->update();

redirect('/administrators/categories');