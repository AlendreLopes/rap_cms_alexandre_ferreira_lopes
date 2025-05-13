<?php

use App\Http\Controllers\BrandsController;
// 
$id = $_GET['id'];
// Brand Details
$details = (new BrandsController())->show($views, $id);