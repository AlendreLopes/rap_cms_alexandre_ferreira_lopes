<?php

use App\Http\Controllers\UsersController;
//
// Get Address Id
$id = $_POST['id'];
// 
$addressCreate = (new UsersController())->addressDelete($id);
