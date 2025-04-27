<?php

// Databases
$database = Database::databases();
$secrets = Database::secrets();

// Connection
$connection = new Connection($database['db'], $secrets['secrets']);

$query = "SELECT * FROM posts";

$posts = $connection->query($query)->fetchAll();

// Blog title
$title = 'Blog';

// Guest Layouts
require ViewsController::layouts('Blog/BlogLayout.php', [
    'views' => $views,
    'posts' => $posts
]);

