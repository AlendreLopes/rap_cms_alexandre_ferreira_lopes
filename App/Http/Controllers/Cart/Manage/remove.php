<?php

use App\Http\Controllers\CartController;
// 
$id = strip_tags($_POST['id']);
// 
$delete = (new CartController())->remove($id);

redirect("/");

