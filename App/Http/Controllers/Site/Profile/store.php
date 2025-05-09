<?php

use App\Http\Controllers\SiteController;

// User Store
$user = (new SiteController())->store();
// 
// Happyend 
redirect('/');