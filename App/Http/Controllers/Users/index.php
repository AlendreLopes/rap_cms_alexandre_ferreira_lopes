<?php

use App\App;
use App\Common\Database\Connection;

$connection = App::resolve(Connection::class);

$query = "SELECT * FROM posts";

$posts = $connection->query($query)->fetchAll();

// Blog title
$title = 'Blog';

// Guest Layouts
require httpLayouts('Users/UserLayout.php', [
    'views' => $views,
    'posts' => $posts
]);

