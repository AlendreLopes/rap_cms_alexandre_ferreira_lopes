<?php

// Create query
$sessionLoggedIn = 757;

$id = $_GET['id'];

$query = "SELECT * FROM posts WHERE id = :id";

$post = $connection->query($query, [':id' => $id])->fetchOrAbort();

// dd($user);
authorize($post['created_by'] === $sessionLoggedIn);

header('location', '/');

die();