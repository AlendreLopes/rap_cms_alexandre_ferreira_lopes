<?php

use App\Http\Controllers\PaymentsController;
// 
// Payments Users
$payments = (new PaymentsController())->index($views);