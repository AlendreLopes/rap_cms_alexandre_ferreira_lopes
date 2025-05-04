<?php

use App\Http\Controllers\BlogController;
use App\Http\Models\Blog;

// Id
$id = $_POST['id'];
// 
// Validate form
$form = Blog::validate($attributes = [
    'title' => $_POST['title'],
    'description' => $_POST['description']
]);
// 
$update = (new BlogController)->update(
    $id,
    $attributes['title'],
    $attributes['description'],
    $_POST['status'] ?? 'Draft',
);
// 
if (!$update) {

    $form->hasErrors('errors', 'Errors thowed!')->throw();

}

// 
redirect("/blog/show?id={$id}");
