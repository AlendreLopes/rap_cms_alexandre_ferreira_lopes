<?php

use App\Http\Controllers\AdminsController;
// 
// Get current User
$id = $_SESSION['rap_cms_adm']['userId'];
// 
$security = (new AdminsController())->securityAccount($id);

redirect('/administrators/show');