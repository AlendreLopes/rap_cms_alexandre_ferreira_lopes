<?php

use App\Http\Controllers\CollorsController;
// 
$id = $_GET['id'];
// 
$show = (new CollorsController())->show($views, $id);