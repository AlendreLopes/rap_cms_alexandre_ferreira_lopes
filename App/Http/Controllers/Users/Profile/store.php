<?php

use App\App;
use App\Common\Database\Connection;
use App\Common\Validations\Validation;


// Connection
$connection = App::resolve(Connection::class);

// Get value register form
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Erros
$errors = [];

// Validation
if (!Validation::string($username, 5, 50)) {
    $errors['username'] = "Username lenght min 5 and max 150";
}

if (!Validation::email($email)) {
    $errors['email'] = "Email invalid";
}

if (!Validation::string($password, 5, 150)) {
    $errors['password'] = "Password lenght min 5 and max 150";
}

// If has Erros send to register page
if (!empty($errors)) {

    header('location: /register');

    exit();

} else {

    // Check if account already exist
    $user = $connection->query("SELECT * FROM users WHERE email = :email", [':email' => $email])->fetch();

    // If yes, redirect to login page
    if ($user) {

        header('location: /login');

        exit();

    }
    // If not, save on to the database, and then log in the user, and redierct.
    $register = $connection->query("INSERT INTO users(username, email, password, status, created_at, updated_at) VALUES (:username, :email, :password, :status, :created_at, :updated_at)", [
        ':username' => $username,
        ':email' => $email,
        ':password' => password_hash($password, PASSWORD_BCRYPT),
        ':status' => 10,
        ':created_at' => date("Y-m-d H:i:s"),
        ':updated_at' => date("Y-m-d H:i:s"),
    ]);

    // Create session data user

    $_SESSION['rap_cms'] = [
        'logged_in' => false,
        'dashboard' => [
            'index' => '/dashboard',
            'profile' => '/dashboard/users/profile',
            'logout' => '/dashboard/users/logout'
        ],
        'userId' => $user['id'],
        'userAdm' => false,
        'userName' => $user['username'],
        'userEmail' => $user['email']
    ];

    session_regenerate_id(true);

    // User Access Layout
    header('location: /dashboard');

    exit();
}