<?php

use App\Http\Controllers\BrandsController;
// 
// Administration Products
$users = (new BrandsController())->index($views);