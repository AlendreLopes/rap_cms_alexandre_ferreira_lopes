<?php

use App\Http\Controllers\AdminsController;

// Administration Orders
$orders = (new AdminsController())->orders($views);