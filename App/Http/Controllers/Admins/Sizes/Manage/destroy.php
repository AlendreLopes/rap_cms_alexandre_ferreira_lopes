<?php

use App\Http\Controllers\SizesController;
// 
$id = $_POST['id'];
// 
$delete = (new SizesController())->delete($id);

redirect('/administrators/sizes');