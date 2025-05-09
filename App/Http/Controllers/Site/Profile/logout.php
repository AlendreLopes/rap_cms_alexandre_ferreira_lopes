<?php

use App\Http\Controllers\SiteController;

// Log the user out
$logout = (new SiteController())->logout();
// 
redirect('/');