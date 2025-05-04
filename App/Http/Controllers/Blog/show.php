<?php

use App\Http\Controllers\BlogController;
// 
$id = $_GET['id'];
// 
// Title
$title = 'View Post';
// 
// Blog Layouts
$blog = (new BlogController)->show($views, $id);
