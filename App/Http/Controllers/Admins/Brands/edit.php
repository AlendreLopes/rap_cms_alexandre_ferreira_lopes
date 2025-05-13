<?php

use App\Http\Controllers\BrandsController;
// 
$id = $_GET['id'];
// Administration Brands Edit
$users = (new BrandsController())->edit($views, $id);