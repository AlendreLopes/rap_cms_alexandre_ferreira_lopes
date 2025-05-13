<?php

use App\Http\Controllers\SizesController;
// 
$id = $_GET['id'];
// Administration Sizes Edit
$users = (new SizesController())->edit($views, $id);