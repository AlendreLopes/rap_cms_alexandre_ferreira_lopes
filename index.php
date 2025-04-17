<?php

include 'vendor/autoload.php';

include 'application/library/filters/Functions.php';
########################## DDDDDD ###################################
// dd();

// $params = require 'application/common/config/main.php';

// include_once 'application/common/ado/Connection.php';

// $id = $_GET['id'];

// $query = "SELECT * FROM posts WHERE id = :id";

// $sql = new Connection($params['databases']['db'], $params['secrets']);

// $posts = $sql->query($query, [':id' => $id])->fetch();

// dd($posts);

// Guest Router Content
include_once 'application/views/layouts/GuestSlot.php';