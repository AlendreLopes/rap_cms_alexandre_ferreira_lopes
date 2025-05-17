<?php

use App\Http\Controllers\CartController;

// 
$id = strip_tags($_POST['id']);
// 
$store = (new CartController())->store($id);
// 
redirect("/");