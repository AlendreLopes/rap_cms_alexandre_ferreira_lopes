<?php

use App\Http\Models\Orders;
// 
$user = $_SESSION['rap_cms']['userId'];
// 
$store = (new Orders)->create($id);