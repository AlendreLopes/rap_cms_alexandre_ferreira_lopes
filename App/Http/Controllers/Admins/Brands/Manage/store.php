<?php

use App\Http\Controllers\BrandsController;
// 
// Brand Create
$store = (new BrandsController())->store();

redirect('/administrators/brands');