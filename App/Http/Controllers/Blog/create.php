<?php

use App\Http\Controllers\BlogController;

// Title
$title = 'Create Post';

// Blog Layouts
// require httpLayouts('Blog/BlogLayout.php');
$blog = (new BlogController)->create($views);