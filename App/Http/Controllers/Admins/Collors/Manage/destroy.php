<?php

use App\Http\Controllers\CollorsController;
// 
$id = $_POST['id'];
// 
$delete = (new CollorsController())->delete($id);

redirect('/administrators/collors');