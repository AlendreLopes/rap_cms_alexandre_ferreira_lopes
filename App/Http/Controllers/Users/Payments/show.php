<?php

use App\Http\Controllers\AdminsController;
// 
$id = $_GET['id'];
// Order Details
$details = (new AdminsController())->paymentsDetails($views, $id);