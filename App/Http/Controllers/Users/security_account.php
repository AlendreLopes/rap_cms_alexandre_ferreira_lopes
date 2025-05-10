<?php

use App\Http\Controllers\UsersController;
// 
// Get current User
$user = $_SESSION['rap_cms']['userId'];
// 
$profile = (new UsersController())->security($views, $user);