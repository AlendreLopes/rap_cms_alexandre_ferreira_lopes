<?php

// Create query
$sessionLoggedIn = 757;

// Conection
require ViewsController::common('ado/Connection.php');
// Databases
$database = require ViewsController::common('config/databases.php');
// Connections
$connection = new Connection($database['databases']['db'], $database['secrets']);

$id = $_GET['id'];

$query = "SELECT * FROM posts WHERE id = :id";

$post = $connection->query($query, [':id' => $id])->fetchOrAbort();

// dd($user);
authorize($post['created_by'] === $sessionLoggedIn);

// Title
$title = 'View Post';

// Blog Layouts
require ViewsController::layouts('Blog/BlogLayout.php', [
    'post' => $post,
]);
