<?php

use App\Http\Controllers\AdminsController;
// 
// Get Current User
$id = $_SESSION['rap_cms_adm']['userId'];
// 
$show = (new AdminsController())->show($views, $id);