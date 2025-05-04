<?php

namespace App\Http\Controllers;

use App\App;
use App\Common\Database\Connection;
use App\Common\Sessions;

class SiteController
{

    public function index(string $views)
    {
        // Title
        $title = 'RAP CMS';
        // 
        return require httpLayouts('GuestLayout.php', [
            'views' => $views,
        ]);
    }

    /**
     * Summary of contact
     * @param mixed 
     * @return void
     */
    public function contact($views)
    {
        // Title
        $title = 'RAP CMS Contact';
        // 
        return require httpLayouts('GuestLayout.php', [
            'views' => $views,
        ]);

        // 
        // $model = new Site();
        // $model->store($id);
        // echo $model->store();
    }

    public function login($email, $password)
    {
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM users WHERE email = :email";
        
        $user = $connection->query($query, [
            ':email' => $email
        ])->fetch();

        if ($user) {
            // If yes, redirect to login page
            if (password_verify($password, $user['password'])) {

                $_SESSION['rap_cms'] = [
                    'logged_in' => true,
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

                Sessions::add('success', "Welcome back {$user['username']}!");

                return true;

            }

            return false;
        }
    }

    public function logout() {

        Sessions::destroy();

        Sessions::add('error', "By by, see you later!");
        
    }
}
