<?php

namespace App\Http\Models;

use App\App;
use App\Common\Database\Connection;
use App\Common\Sessions;

class Orders
{

    public function update($id, $username, $email, $password): bool
    {
        $connection = App::resolve(Connection::class);

        $query = "UPDATE orders SET username = username, email = :email, password = :password, status = :status, updated_at = :updated_at WHERE id = :id";

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

            Sessions::add('success', 'Order edited witch success!');

            return true;

        }

        Sessions::add('success', 'Error to try edit Order!');

        return false;
    }
    public function register($username, $email, $password)
    {
        // Check account by email, this field is unique, if already exist
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM users WHERE email = :email";

        $user = $connection->query($query, [
            ':email' => $email
        ])->fetch();

        if (!$user) {

            return false;

        }

        $store = $connection->query("INSERT INTO orders(username, email, password, status, created_at) VALUES (:username, :email, :password, :status, :created_at)", [
            ':username' => $username,
            ':email' => $email,
            ':password' => password_hash($password, PASSWORD_BCRYPT),
            ':status' => 10,
            ':created_at' => date("Y-m-d H:i:s"),
        ])->fetch();

        if ($store) {


            Sessions::add('success', "Well come {$user['username']}, look our outlet!");

            return true;

        }
    }

    public function store(): bool
    {


        $register = $this->register();

        if (!$register) {

            return false;

        }

        return true;

    }

    public function ordersDetails($id)
    {
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM orders WHERE id = :id";

        $orders = $connection->query($query, [
            ':id' => $id
        ])->fetch();

        return $orders;
    }

    public function destroy($id): bool
    {
        $connection = App::resolve(Connection::class);

        $query = "DELETE FROM orders WHERE id = :id";

        $destroy = $connection->query($query, [':id' => $id]);

        if ($destroy) {

            return true;
        }

        return false;
    }

    public function factory($number)
    {
        $faker = \Faker\Factory::create();

        $connection = App::resolve(Connection::class);

        for ($i = 0; $i < $number; $i++) {
            $connection->query("INSERT INTO users(username, email, password, status, created_at) VALUES (:username, :email, :password, :status, :created_at)", [
                ':username' => $faker->name(),
                ':email' => $faker->unique()->email(),
                ':password' => password_hash("password!", PASSWORD_BCRYPT),
                ':status' => 10,
                ':created_at' => date("Y-m-d H:i:s"),
            ]);
        }

    }

}