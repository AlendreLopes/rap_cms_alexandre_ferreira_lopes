<?php

namespace App\Http\Models;

use App\App;
use App\Common\Database\Connection;
use App\Common\Sessions;
use App\Http\Models\Forms\AdminProfileForm;
use App\Http\Models\Forms\AdminSecurityForm;
use App\Http\Models\Forms\LoginForm;
use App\Http\Models\Forms\RegisterForm;

class Admins
{
    
    public function login($email, $password)
    {
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM administrators WHERE email = :email";

        $user = $connection->query($query, [
            ':email' => $email
        ])->fetch();

        if ($user) {

            if (password_verify($password, $user['password'])) {

                $_SESSION['rap_cms_adm'] = [
                    'logged_in' => true,
                    'dashboard' => [
                        'index' => '/administrators',
                        'profile' => '/administrators/show',
                        'logout' => '/administrators/logout'
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

    public function edit($id)
    {
        $edit = AdminProfileForm::validate($attributes = [
            'username' => $_POST['username'],
            'email' => $_POST['email'],
            'phone' => $_POST['phone']
        ]);

        $update = $this->update($id, $attributes['username'], $attributes['email'], $attributes['phone']);

        if (!$update) {
            
            $edit->hasErrors('username', 'Errors found on the form')->throw();

            return false;

        }

        Sessions::add('success', 'Admins data updated with success!');

        return true;
    }

    public function update($id, $username, $email, $phone): bool
    {

        // Call method of the Model User

        $connection = App::resolve(Connection::class);

        $query = "UPDATE administrators SET username = :username, email = :email, phone = :phone, status = :status, updated_at = :updated_at WHERE id = :id";

        $update = $connection->query(
            $query,
            [
                ':id' => $id,
                ':username' => htmlspecialchars($username),
                ':email' => htmlspecialchars($email),
                ':phone' => htmlspecialchars($phone),
                ':status' => 10,
                ':updated_at' => date("Y-m-d H:i:s")
            ]
        );

        if ($update) {

            Sessions::add('success', 'User edited witch success!');

            return true;

        }

        Sessions::add('success', 'Error to try edit User!');

        return false;

    }

    public function security($user)
    {
        $security = AdminSecurityForm::validate($attributes = [
            'password' => $_POST['password'],
        ]);

        $securityAccount = $this->securityAccount($user, $attributes['password']);

        if (!$securityAccount) {

            $security->hasErrors('password', 'Errors found on form!');

            return false;
        }

        Sessions::add('success', 'Password updated with success!');

        return true;
    }

    public function securityAccount($id, $password)
    {
        $connection = App::resolve(Connection::class);

        $query = "UPDATE administrators SET password = :password WHERE id = :id";

        $update = $connection->query(
            $query,
            [
                ':id' => $id,
                ':password' => password_hash($password, PASSWORD_BCRYPT),
            ]
        );

        if ($update) {

            return true;

        }

        return false;
    }

    public function register($username, $email, $password)
    {
        // Check account by email, this field is unique, if already exist
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM administrators WHERE email = :email";

        $user = $connection->query($query, [
            ':email' => $email
        ])->fetch();

        if (!$user) {

            return false;

        }

        $store = $connection->query("INSERT INTO administrators(username, email, password, status, created_at) VALUES (:username, :email, :password, :status, :created_at)", [
            ':username' => $username,
            ':email' => $email,
            ':password' => password_hash($password, PASSWORD_BCRYPT),
            ':status' => 10,
            ':created_at' => date("Y-m-d H:i:s"),
        ])->fetch();

        if ($store) {

            // Get User data by email, this field is unique
            $user = $this->getAdminByEmail($email);

            // Create session data user
            $_SESSION['rap_cms_adm'] = [
                'logged_in' => true,
                'dashboard' => [
                    'index' => '/administrators',
                    'profile' => '/administrators/show',
                    'logout' => '/administrators/logout'
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

        $registre = $this->register($attributes['username'], $attributes['email'], $attributes['password']);

        if (!$registre) {

            $form->hasErrors('email', "Email allready registred!")->throw();

            return false;

        }

        return true;

    }

    public function destroy($id): bool
    {
        $connection = App::resolve(Connection::class);

        $query = "DELETE FROM administrators WHERE id = :id";

        $destroy = $connection->query($query, [':id' => $id]);

        if ($destroy) {

            return true;
        }

        return false;
    }

    public function getAdminById($id)
    {
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM administrators WHERE id = :id";

        $user = $connection->query($query, [
            ':id' => $id
        ])->fetch();

        return $user;
    }

    public function getAdminByEmail($email)
    {

        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM administrators WHERE email = :email";

        $user = $connection->query($query, [
            ':email' => $email
        ])->fetch();

        return $user;
    }

}