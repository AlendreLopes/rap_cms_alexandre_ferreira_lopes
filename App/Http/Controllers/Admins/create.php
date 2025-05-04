<?php

use App\Common\Sessions;

// Administrator
// 
// Title
$title = 'Register';
// 
// Errors
$errors = [];
$errors['errors']  = Sessions::get('errors');
$errors['oldData'] = Sessions::get('oldData');

// User Access Layout
require httpLayouts('Admin/AdminLayoutAccess.php', [
    'views' => $views,
    'errors' => Sessions::get('errors')
]);

