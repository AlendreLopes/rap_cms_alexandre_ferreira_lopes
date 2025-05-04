<?php

use App\Http\Controllers\BlogController;
use App\Http\Models\Blog;

// Validate value form create blog
$form = Blog::validate($attributes = [
    'title' => $_POST['title'],
    'description' => $_POST['description'],
]);

$store = (new BlogController)->store(
    $_SESSION['rap_cms']['userId'],
    $attributes['title'],
    $attributes['description'],
    $_POST['status'] ?? 'Draft',
);

if (!$store) {

    $form->hasErrors('errors', 'Errors thowed!')->throw();
    
}

redirect('/blog');

// $result = array();

// $errors = [];

// if (!Validation::string($attributes['title'], 5, 50)) {
//     $errors['title'] = 'Title min 5 and max 50 chars.';
// }

// if (!Validation::string($attributes['description'], 50, 1500)) {
//     $errors['description'] = 'Description min 50 and max 1000 chars.';
// }

// $store = (new BlogController)->store(
//     $_SESSION['rap_cms']['userId'], 
//     $attributes['title'],
//     $attributes['description'],
//     $_POST['status'] ?? 'Draft',
// );


// if (!$store) {

//     // $form->hasErrors('errors', 'Errors thowed!')->throw();
//     $result["errors"] = false;
//     $result['message'] = $form->hasErrors('errors', 'Errors thowed!');
//     // return false;

// }

// $result["success"] = true;
// $result["message"] = "Post created with success!";
// // 
// // return true;
// echo json_encode($result);