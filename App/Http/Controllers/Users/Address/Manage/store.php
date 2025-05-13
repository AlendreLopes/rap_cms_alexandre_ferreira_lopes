<?php

use App\Http\Controllers\UsersController;
//
// dd($_POST);
$addressCreate = (new UsersController())->addressStore();
// 
// Happyend
redirect('/dashboard/address');