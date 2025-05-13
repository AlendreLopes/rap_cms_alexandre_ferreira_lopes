<?php

use App\Http\Controllers\AdminsController;
// 
// Get Current Admin
$id = $_SESSION['rap_cms_adm']['userId'];
// 
$admin = (new AdminsController())->edit($views, $id);