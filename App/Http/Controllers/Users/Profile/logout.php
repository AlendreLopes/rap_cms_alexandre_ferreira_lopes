<?php

use App\Http\Controllers\SiteController;

// // Log the user out
$site = (new SiteController)->logout();

header('location: /');

exit();