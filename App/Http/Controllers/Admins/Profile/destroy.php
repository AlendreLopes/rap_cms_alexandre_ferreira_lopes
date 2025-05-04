<?php

// Get current User
$sessionLoggedIn = 757;

$id = $_POST['id'];

$query = "SELECT id, created_by FROM posts WHERE id = :id AND created_by = :user";

$post = $connection->query($query, [':id' => $id, ':user' => $sessionLoggedIn])->fetchOrAbort();

// Verify if the user is the author
authorize($post['created_by'] === $sessionLoggedIn);

// If yes the post will deleted

$deleteQuery = "Delete FROM posts WHERE id = :id";

$delete = $connection->query($deleteQuery, [':id' => $id])->fetchOrAbort();


header('location: /blog');

die();