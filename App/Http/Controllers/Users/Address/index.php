<?php

use App\Http\Controllers\UsersAddressController;
// 
$id = $_SESSION['rap_cms']['userId'];
// 
$address = (new UsersAddressController())->index($views, $id);