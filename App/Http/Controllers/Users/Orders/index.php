<?php

use App\Http\Controllers\UsersController;
// 
$user = $_GET['id'];
// 
$showOrders = (new UsersController())->orders($views, $user);