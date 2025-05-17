<?php

use App\Http\Controllers\CartController;
// 

$delete = (new CartController())->delete();

redirect("/");

