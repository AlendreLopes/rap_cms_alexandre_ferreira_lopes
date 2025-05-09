<?php

use App\Http\Controllers\AdminsController;

// Log the administrator out
$logout = (new AdminsController())->logout();

header('location: /');

exit();