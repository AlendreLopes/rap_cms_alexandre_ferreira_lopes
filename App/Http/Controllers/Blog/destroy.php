<?php

use App\Http\Controllers\BlogController;

// 
$id = $_POST['id'];
$blog = (new BlogController)->delete($id);