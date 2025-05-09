<?php

use App\Http\Controllers\UsersController;
// 
$id = $_SESSION['rap_cms']['userId'];
// User Details
$details = (new UsersController())->edit($views, $id);