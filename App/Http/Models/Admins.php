<?php

namespace App\Http\Models;

use App\App;
use App\Common\Database\Connection;
use App\Common\Sessions;
use App\Http\Models\Forms\LoginForm;
use App\Http\Models\Forms\RegisterForm;

class Admins
{
    
    // Administrators Panel
    // Section Interface
    public function orders()
    {
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM orders";

        $orders = $connection->query($query)->fetchAll();

        return $orders;
    }

    public function ordersDetails($id)
    {
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM orders WHERE id = :id";

        $order = $connection->query($query, [
            ':id' => $id
        ])->fetch();

        return $order;
    }

    public function payments()
    {
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM payments";

        $payments = $connection->query($query)->fetchAll();

        return $payments;
    }

    public function paymentsDetails($id)
    {
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM payments WHERE id = :id";

        $payments = $connection->query($query, [
            ':id' => $id
        ])->fetch();

        return $payments;
    }

    public function products()
    {
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM products";

        $products = $connection->query($query)->fetchAll();

        return $products;
    }
    public function productsInsert()
    {
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM products";

        $products = $connection->query($query);

        return $products;
    }

    public function productsDetails($id)
    {
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM products WHERE id = :id";

        $products = $connection->query($query, [
            ':id' => $id
        ])->fetch();

        return $products;
    }

    public function users()
    {
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM users";

        $users = $connection->query($query)->fetchAll();

        return $users;
    }

    public function usersDetails($id)
    {
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM users WHERE id = :id";

        $users = $connection->query($query, [
            ':id' => $id
        ])->fetch();

        return $users;
    }
    // 
    // Section Administrators
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

    public function update($id, $username, $email, $password): bool
    {

        // Call method of the Model User

        $connection = App::resolve(Connection::class);

        $query = "UPDATE administrators SET username = username, email = :email, password = :password, status = :status, updated_at = :updated_at WHERE id = :id";

        $update = $connection->query(
            $query,
            [
                ':id' => $id,
                ':username' => htmlspecialchars($username),
                ':email' => htmlspecialchars($email),
                ':password' => htmlspecialchars($password),
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

}