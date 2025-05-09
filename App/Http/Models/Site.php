<?php

namespace App\Http\Models;

use App\App;
use App\Common\Database\Connection;
use App\Common\Sessions;
use App\Http\Models\Forms\LoginForm;
use App\Http\Models\Forms\RegisterForm;

class Site
{
    public function index()  {
        return 'List items to index file';
    }

    public function login($email, $password)
    {
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM users WHERE email = :email";

        $user = $connection->query($query, [
            ':email' => $email
        ])->fetch();

        if ($user)
        {
            if (password_verify($password, $user['password']))
            {
                $_SESSION['rap_cms'] = [
                    'logged_in' => true,
                    'dashboard' => [
                        'index' => '/dashboard',
                        'profile' => '/dashboard/profile',
                        'logout' => '/dashboard/logout'
                    ],
                    'userId' => $user['id'],
                    'userName' => $user['username'],
                    'userEmail' => $user['email']
                ];

                session_regenerate_id(true);

                Sessions::add('success', "Welcome back {$user['username']}!");
                
                return true;
            }
            return false;
        }
        return false;
    }

    public function signing()
    {
        $form = LoginForm::validate($attributes = [
            'email' => $_POST['email'],
            'password' => $_POST['password']
        ]);

        $login = $this->login($attributes['email'], $attributes['password']);

        if (!$login) {
            $form->hasErrors('email', 'No matching account found for email or password')->throw();
            return false;
        }
        return true;
    }
    
    public function register($username, $email, $password)
    {
        // Check account by email, this field is unique, if already exist
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM users WHERE email = :email";

        $user = $connection->query($query, [
            ':email' => $email
        ])->fetch();

        if ($user)
        {
            return false;
        }

        $store = $connection->query("INSERT INTO users(username, email, password, status, created_at) VALUES (:username, :email, :password, :status, :created_at)", [
            ':username' => $username,
            ':email' => $email,
            ':password' => password_hash($password, PASSWORD_BCRYPT),
            ':status' => 10,
            ':created_at' => date("Y-m-d H:i:s"),
        ])->fetch();

        if ($store)
        {
            // Get User data by email, this field is unique
            $user = $this->getUserByEmail($email);

            // Create session data user
            $_SESSION['rap_cms'] = [
                'logged_in' => false,
                'dashboard' => [
                    'index' => '/dashboard',
                    'profile' => '/dashboard/profile',
                    'logout' => '/dashboard/logout'
                ],
                'userId' => $user['id'],
                'userName' => $user['username'],
                'userEmail' => $user['email']
            ];

            session_regenerate_id(true);

            Sessions::add('success', "Well come {$user['username']}, look our outlet!");

            return true;
        }
    }

    public function store(): bool
    {
        $form = RegisterForm::validate($attributes = [
            'username' => $_POST['username'],
            'email' => $_POST['email'],
            'password' => $_POST['password']
        ]);

        $register = $this->register($attributes['username'], $attributes['email'], $attributes['password']);

        if (!$register)
        {
            $form->hasErrors('email', "Email allready registered!")->throw();

            return false;
        }
        
        return true;
    }

    public function getUserByEmail($email)
    {

        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM users WHERE email = :email";

        $user = $connection->query($query, [
            ':email' => $email
        ])->fetch();

        return $user;
    }

}