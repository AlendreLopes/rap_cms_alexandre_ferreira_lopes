<?php

use App\Http\Controllers\UsersController;

// User Layouts
$users = (new UsersController())->index($views);
