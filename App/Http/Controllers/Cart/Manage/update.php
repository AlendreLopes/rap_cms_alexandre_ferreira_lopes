<?php

use App\Http\Controllers\CartController;
// 
$id = strip_tags($_POST['id']);
// 
$update = (new CartController())->update($id);
// 
redirect("/");