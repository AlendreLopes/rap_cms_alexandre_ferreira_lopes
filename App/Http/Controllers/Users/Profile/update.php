<?php

use App\Http\Controllers\UsersController;
// 
// Get current User
$user = $_SESSION['rap_cms']['userId'];
// 
$update = (new UsersController())->update($user);
// 
// Happyend
redirect('/dashboard/profile');