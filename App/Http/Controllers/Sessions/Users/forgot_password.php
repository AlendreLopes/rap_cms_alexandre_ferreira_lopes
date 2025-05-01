<?php

use App\Sessions;

// Users

// Title
$title = 'Recover password';

// Errors
$errors = [];
$errors['errors'] = Sessions::get('errors');
$errors['oldData'] = Sessions::get('oldData');

// User Access Layout
require httpLayouts('Users/UserLayoutAccess.php', [
    'views' => $views,
]);
