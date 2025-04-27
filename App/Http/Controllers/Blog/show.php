<?php

// Create query
$sessionLoggedIn = 757;

// Databases
$database = Database::databases();
$secrets = Database::secrets();

// Connection
$connection = new Connection($database['db'], $secrets['secrets']);

$id = $_GET['id'];

$query = "SELECT * FROM posts WHERE id = :id";

$post = $connection->query($query, [':id' => $id])->fetchOrAbort();

// dd($user);
authorize($post['created_by'] === $sessionLoggedIn);

// Title
$title = 'View Post';

// Blog Layouts
$blog = new BlogController();
$blog->show($views, $post);
// require ViewsController::layouts('Blog/BlogLayout.php', [
//     'post' => $post,
// ]);
