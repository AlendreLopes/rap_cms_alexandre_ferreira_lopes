<?php

use App\Http\Controllers\UsersController;

// // Log the user out
$site = (new UsersController)->logout();

header('location: /');

exit();