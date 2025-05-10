<?php

use App\Http\Controllers\UsersController;
// 
// Get current User
$user = $_SESSION['rap_cms']['userId'];
// 
$security = (new UsersController())->securityAccount($user);

redirect('/dashboard');