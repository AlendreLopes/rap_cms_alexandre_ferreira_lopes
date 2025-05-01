<?php

use App\App;
use App\Common\Validator;
use App\Database\Connection;

// Connection
$connection = App::resolve(Connection::class);

// Get value register form
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Erros
$errors = [];

// Validation
if (!Validator::string($username, 5, 50)) {
    $errors['username'] = "Username lenght min 5 and max 150";
}

if (!Validator::email($email)) {
    $errors['email'] = "Email invalid";
}

if (!Validator::string($password, 5, 150)) {
    $errors['password'] = "Password lenght min 5 and max 150";
}

// If has Erros send to register page
if (!empty($errors)) {

    // $views = 'register.php';

    // require httpLayouts('Users/UserLayoutAccess.php', [
    //     'views' => $views,
    //     'errors' => $errors,
    // ]);

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
        'logged_in' => true,
        'dashboard' => [
            'index' => '/administrators',
            'profile' => '/administrators/users/profile',
            'logout' => '/administrators/users/logout'
        ],
        'username' => $user['username'],
        'email' => $user['email']
    ];

    session_regenerate_id(true);

    // User Access Layout
    header('location: /administrators');

    exit();
}