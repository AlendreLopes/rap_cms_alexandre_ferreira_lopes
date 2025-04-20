<?php

// Form errors
$errors = [];

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    

    if (! Validator::string($_POST['title'], 5, 50)) {
        $errors['title'] = "The title must be at min 5 and max 50 characteres";
    }

    if (! Validator::string($_POST['description'], 50, 500)) {
        $errors['description'] = "The descriptio of post no more than 500 characters is required.";
    }

    if (empty($errors)) {
        $connection->query("INSERT INTO posts 
        (title, description, created_by, created_at)
        VALUES
        (:title, :descrition, :created_by, :created_at)
        ", [
            'title' => htmlspecialchars($_POST['title']),
            'description' => htmlspecialchars($_POST['description']),
            'created_by' => $sessionLoggedIn,
            'created_at' => date("Y-m-d H:i:s")
        ]);
    }
}

// Title
$title = 'Create Post';

// Varible slot to all content
$slot = $view;

// Blog Layouts
require Views::layouts('Blog/BlogLayout.php', [
    'errors' => $errors,
]);