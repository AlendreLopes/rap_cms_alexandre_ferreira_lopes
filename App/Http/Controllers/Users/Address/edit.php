<?php

use App\Http\Controllers\UsersAddressController;
// 
$id = $_GET['id'];
// 
$addressEdit = (new UsersAddressController())->edit($views, $id);