<?php

namespace App\Http\Models\Users;

use App\App;
use App\Common\Database\Connection;
use App\Common\Sessions;

class UsersAuthenticator
{
    public function attempt($email, $password)
    {
        // Check if account already exist
        $user = App::resolve(Connection::class)->query("SELECT * FROM users WHERE email = :email", [
            ':email' => $email
        ])->fetch();

        if ($user) {
            // If yes, redirect to login page
            if (password_verify($password, $user['password'])) {

                $this->login($user);

                return true;
            }

            return false;
        }
    }

    public function login($user)
    {
        $_SESSION['rap_cms'] = [
            'logged_in' => true,
            'dashboard' => [
                'index'   => '/dashboard',
                'profile' => '/dashboard/users/profile',
                'logout'  => '/dashboard/users/logout'
            ],
            'userId' => $user['id'],
            'userAdm' => false,
            'userName' => $user['username'],
            'userEmail' => $user['email']
        ];

        session_regenerate_id(true);
    }

    public function logout()
    {
        Sessions::destroy();
    }
}