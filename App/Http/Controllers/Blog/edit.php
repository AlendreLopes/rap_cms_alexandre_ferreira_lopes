<?php

use App\Http\Controllers\BlogController;
// 
$id = $_GET['id'];
// 
// Blog Layouts
$blog = (new BlogController)->edit($views, $id);
