<?php

use App\Http\Controllers\AdminsController;
// 
// Get current User
$user = $_SESSION['rap_cms_adm']['userId'];
// 
$update = (new AdminsController())->update($user);
// 
// Happyend
redirect('/administrators/show');