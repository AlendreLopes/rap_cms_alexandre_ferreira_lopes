<?php

use App\App;
use App\Common\Validator;
use App\Database\Connection;

$connection = App::resolve(Connection::class);

// Seession move to index
$sessionLoggedIn = 2;

// Form errors
$errors = [];


if (!Validator::string($_POST['title'], 5, 50)) {
    $errors['title'] = "The title must be at min 5 and max 50 characteres";
}

if (!Validator::string($_POST['description'], 50, 1000)) {
    $errors['description'] = "The description of post no more than 1000 characters is required.";
}

if (!empty($errors)) {
    // Title
    $title = 'Create Post';

    // Blog Layouts
    require httpLayouts('Blog/BlogLayout.php', [
        'errors' => $errors
    ]);
}


if (empty($errors)) {
    $connection->query("INSERT INTO posts 
        (user_id, title, description, created_at)
        VALUES
        (:user_id, :title, :description, :created_at)
        ", [
        'user_id' => $sessionLoggedIn,
        'title' => htmlspecialchars($_POST['title']),
        'description' => htmlspecialchars($_POST['description']),
        'created_at' => date("Y-m-d H:i:s")
    ]);
}
