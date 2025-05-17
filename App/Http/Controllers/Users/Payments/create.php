<?php

use App\Http\Controllers\PaymentsController;
// 
$id = $_SESSION['rap_cms']['userId'];
// 
$create = (new PaymentsController())->create($views, $id);