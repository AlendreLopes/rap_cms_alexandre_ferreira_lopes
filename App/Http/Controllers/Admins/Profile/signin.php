<?php

use App\Http\Controllers\AdminsController;

// Administrators Sign IN
$admin = (new AdminsController())->signing();
// Happyend 
redirect('/administrators');

