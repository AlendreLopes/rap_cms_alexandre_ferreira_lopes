<?php

// Conection
require ViewsController::common('ado/Connection.php');
// Databases
$database = require ViewsController::common('config/databases.php');
// Connections
$connection = new Connection($database['databases']['db'], $database['secrets']);

$query = "SELECT * FROM posts";

$posts = $connection->query($query)->fetchAll();

// Blog title
$title = 'Blog';

// Guest Layouts
require ViewsController::layouts('Blog/BlogLayout.php', [
    'posts' => $posts
]);
