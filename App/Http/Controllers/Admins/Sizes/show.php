<?php

use App\Http\Controllers\SizesController;
// 
$id = $_GET['id'];
// Size Details
$show = (new SizesController())->show($views, $id);