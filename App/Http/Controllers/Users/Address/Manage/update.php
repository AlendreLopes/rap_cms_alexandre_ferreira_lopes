<?php

use App\Http\Controllers\UsersController;
//
// dd($_POST);
$addressCreate = (new UsersController())->addressUpdate();
// 
// Happyend
redirect('/dashboard/address');