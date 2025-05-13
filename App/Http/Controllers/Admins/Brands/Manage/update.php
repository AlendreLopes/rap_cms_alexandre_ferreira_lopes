<?php

use App\Http\Controllers\BrandsController;
// 
$update = (new BrandsController())->update();

redirect('/administrators/brands');