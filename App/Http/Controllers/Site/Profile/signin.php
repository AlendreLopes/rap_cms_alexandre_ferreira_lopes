<?php

use App\Http\Controllers\SiteController;

// User Sign In
$user = (new SiteController())->signing();
// 
// Happyend 
redirect('/');
