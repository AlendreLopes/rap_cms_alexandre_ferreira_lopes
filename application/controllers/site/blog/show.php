<?php

// Create query
$sessionLoggedIn = 3;

$id = $_GET['id'];

$query = "SELECT * FROM posts WHERE id = :id";

$post = $connection->query($query, [':id' => $id])->fetchOrAbort();

authorized($post['created_by'] != $sessionLoggedIn, Response::NOT_FOUND);

// Title
$title = 'View Post';

// Varible slot to all content
$slot = $view;

// Blog Layouts
require Views::layouts('Blog/BlogLayout.php', [
    'post' => $post,
]);
