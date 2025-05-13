<?php

use App\Http\Controllers\SizesController;
// 
// Size Create
$store = (new SizesController())->store();

redirect('/administrators/sizes');