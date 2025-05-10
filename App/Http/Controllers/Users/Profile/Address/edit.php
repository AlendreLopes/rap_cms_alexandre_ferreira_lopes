<?php

use App\Http\Controllers\UsersController;
// 
$id = $_GET['id'];
// 
$addressEdit = (new UsersController())->addressEdit($views, $id);