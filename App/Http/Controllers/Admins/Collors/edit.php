<?php

use App\Http\Controllers\CollorsController;
// 
$id = $_GET['id'];
// 
$edit = (new CollorsController())->edit($views, $id);