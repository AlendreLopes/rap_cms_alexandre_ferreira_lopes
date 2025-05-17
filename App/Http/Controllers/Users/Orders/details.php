<?php

use App\Http\Controllers\UsersController;
// 
// Get current user
$order = $_GET['order'];
$user = $_SESSION['rap_cms']['userId'];
// Orders Unpaid
$details = (new UsersController())->ordersDetails($views, $order, $user);