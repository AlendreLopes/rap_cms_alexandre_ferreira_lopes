<?php

use App\Http\Controllers\UsersController;

// Users Layout
$user = (new UsersController())->login($views);
