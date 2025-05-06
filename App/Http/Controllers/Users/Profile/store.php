<?php

use App\Http\Controllers\UsersController;

// User Store
$user = (new UsersController())->store();
// 
// Happyend 
redirect('/');