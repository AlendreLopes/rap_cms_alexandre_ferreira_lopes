<?php

use App\Http\Controllers\AdminsController;
// 
// Administration Users
$users = (new AdminsController())->users($views);