<?php

use App\Http\Controllers\AdminsController;
// 
$id = $_GET['id'];
// Show Users Details
$details = (new AdminsController())->usersDetails($views, $id);