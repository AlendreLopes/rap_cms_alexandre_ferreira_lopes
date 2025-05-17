<?php

use App\Http\Controllers\AdminsController;
// 
// Get Current User
$id = $_GET['id'];
// 
$show = (new AdminsController())->show($views, $id);