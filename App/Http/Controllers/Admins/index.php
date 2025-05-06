<?php

use App\Http\Controllers\AdminController;

// Administrators Layouts
$admin = (new AdminController)->index($views);
