<?php

use App\Http\Controllers\BrandsController;
// 
$id = $_POST['id'];
// 
$delete = (new BrandsController())->delete($id);

redirect('/administrators/brands');