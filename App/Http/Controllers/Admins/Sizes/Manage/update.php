<?php

use App\Http\Controllers\SizesController;
// 
$update = (new SizesController())->update();

redirect('/administrators/sizes');