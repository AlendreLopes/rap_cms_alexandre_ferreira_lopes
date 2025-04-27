<?php

// Create query
$id = $_POST['id'];

$blog = new BlogController();
// $blog->delete($id);

if ($blog->delete($id)) {
    header('location: /blog');
}

exit();