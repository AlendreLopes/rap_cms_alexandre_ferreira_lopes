<?php

use App\Http\Controllers\CollorsController;
// 
$store = (new CollorsController())->store();

redirect('/administrators/collors');