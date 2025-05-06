<?php

namespace App\Http\Controllers;

use App\App;
use App\Common\Database\Connection;
use App\Common\Sessions;

class AdminController
{

    public function index($views)
    {
        // Title
        // $title = 'Administrators';
        require httpLayouts('Admin/AdminLayout.php');
    }

    public function update($id)
    {
    }

    public function login($email, $password)
    {
        $admin = App::resolve(Connection::class)->query("SELECT * FROM admins WHERE email = :email", [
            ':email' => $email
        ])->fetch();

        if ($admin) {
            // If yes, redirect to login page
            if (password_verify($password, $admin['password'])) {

                $_SESSION['rap_cms'] = [
                    'logged_in' => true,
                    'dashboard' => [
                        'index' => '/administrator',
                        'profile' => '/administrator/users/profile',
                        'logout' => '/administrator/logout'
                    ],
                    'userId' => $admin['id'],
                    'userAdm' => true,
                    'userName' => $admin['username'],
                    'userEmail' => $admin['email']
                ];

                session_regenerate_id(true);

                return true;
            }

            return false;
        }

    }

    public function logout()
    {
        Sessions::destroy();
    }
}
