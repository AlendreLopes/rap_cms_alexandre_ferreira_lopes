<?php

use App\Http\Controllers\CollorsController;
// 
$update = (new CollorsController())->update();

redirect('/administrators/collors');