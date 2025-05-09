<?php

use App\Http\Controllers\UsersController;
// 
$id = $_SESSION['rap_cms']['userId'];
// 
$addressEdit = (new UsersController())->addressEdit($views, $id);