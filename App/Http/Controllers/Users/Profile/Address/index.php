<?php

use App\Http\Controllers\UsersController;
// 
$id = $_SESSION['rap_cms']['userId'];
// 
$address = (new UsersController())->address($views, $id);