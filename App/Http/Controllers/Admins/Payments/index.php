<?php

use App\Http\Controllers\AdminsController;

// Administration Users
$payments = (new AdminsController())->payments($views);