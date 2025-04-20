<?php

$query = "SELECT * FROM posts";

$posts = $connection->query($query)->fetchAll();

// Varible slot to all content
$slot = $view;

// Guest Layouts
require Views::layouts('Blog/BlogLayout.php', [
    'posts' => $posts,
]);
