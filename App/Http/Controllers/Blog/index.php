<?php

use App\Http\Controllers\BlogController;
//
// Blog title
$title = 'Blog';
// 
// Guest Layouts
$blog = (new BlogController)->index($views);