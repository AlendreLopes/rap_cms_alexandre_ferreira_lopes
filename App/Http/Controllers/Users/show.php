<?php

use App\Http\Controllers\UsersController;
// 
// Get current User
$user = $_SESSION['rap_cms']['userId'];
// 
$show = (new UsersController())->show($views, $user);