<?php

use App\Http\Controllers\UsersController;

// User Sign In
$site = (new UsersController())->signing();

// Happyend 
redirect('/');
