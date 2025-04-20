<?php

$params = require 'application/common/config/main.php';

$sql = new Connection($params['databases']['db'], $params['secrets']);

$sessionLoggedIn = 3;

$id = $_GET['id'];

$query = "SELECT * FROM posts WHERE id = :id";

$post = $sql->query($query, [':id' => $id])->fetchOrAbort();

authorized($post['created_by'] != $sessionLoggedIn);

// Varible slot to all content
$slot = $view;

// Blog Layouts
require Views::layouts('Blog/PostLayout.php');
