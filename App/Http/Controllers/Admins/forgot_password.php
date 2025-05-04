<?php

use App\Common\Sessions;

// Users
// 
// Title
$title = 'Recover password';
// 
// Errors
$errors = [];
$errors['errors'] = Sessions::get('errors');
$errors['oldData'] = Sessions::get('oldData');
// 
// User Access Layout
require httpLayouts('Admins/AdminsLayoutAccess.php', [
    'views' => $views,
]);
