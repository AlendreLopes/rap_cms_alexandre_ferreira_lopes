<?php

use App\App;
use App\Common\Validator;
use App\Database\Connection;

// Connection
$connection = App::resolve(Connection::class);

// Get values login form
$email = $_POST['email'];
$password = $_POST['password'];

// Erros
$errors = [];

// Validation
if (!Validator::email($email)) {
    $errors['email'] = "Email invalid";
}

// If has Erros send to register page
if (!empty($errors)) {

    header('location: /forgot-password');

    exit();

}

// Check if account already exist
$user = $connection->query("SELECT * FROM users WHERE email = :email", [
    ':email' => $email
])->fetch();


if ($user) {
    // If yes, redirect to login page
    // header('location: /login');
    // exit();
}

// header('location: /login');
// exit();

// User Access Layout
$views = '/login';

require httpLayouts('Users/UserLayoutAccess.php', [
    'errors' => 'No matching account found for that email or password',
    'views' => $views,
]);

