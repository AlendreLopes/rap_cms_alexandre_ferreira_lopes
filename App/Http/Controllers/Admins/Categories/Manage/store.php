<?php

use App\Http\Controllers\CategoriesController;
// 
$store = (new CategoriesController())->store();

redirect('/administrators/categories');