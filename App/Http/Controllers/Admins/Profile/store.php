<?php

use App\Http\Controllers\AdminsController;

// Administrators
// 
// Store
$admin = (new AdminsController())->store();
// 
// Happyend
redirect('/administrators');