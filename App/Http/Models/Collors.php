<?php

namespace App\Http\Models;

use App\App;
use App\Common\Database\Connection;
use App\Common\Sessions;
use App\Http\Models\Forms\ProductsDependenciesForm;

class Collors
{

    public function index()
    {
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM collors";

        $collors = $connection->query($query)->fetchAll();

        return $collors;
    }

    public function show($id)
    {
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM collors WHERE id = :id";

        $show = $connection->query($query, [
            ':id' => $id
        ])->fetch();

        return $show;
    }

    public function create()
    {
        $collors = ProductsDependenciesForm::validate($attributes = [
            'name' => $_POST['name'],
        ]);

        $store = $this->store(
            $attributes['name'],
        );

        if (!$store) {

            $collors->hasErrors('collors', 'Errors are found on form')->throw();
            return false;

        }

        Sessions::add('success', 'Collor registered with succcess!');
        return true;
    }

    public function store($collor): bool
    {
        $connection = App::resolve(Connection::class);

        $query = "INSERT INTO collors (name, created_at) VALUES (:name, :created_at)";

        $store = $connection->query($query, [
            ':name' => $collor,
            ':created_at' => date('Y-m-d h:m:s')
        ]);

        if ($store) {
            return true;
        }

        return false;
    }
    
    public function edit()
    {
        $collor = ProductsDependenciesForm::validate($attributes = [
            'name' => $_POST['name'],
        ]);

        $update = $this->update(
            $_POST['id'],
            $attributes['name'],
        );

        if (!$update) {

            $collor->hasErrors('brans', 'Errors are found on form')->throw();
            return false;

        }

        Sessions::add('success', 'Collor updated with succcess!');
        return true;
    }

    public function update($id, $collor): bool
    {
        $connection = App::resolve(Connection::class);

        $query = "UPDATE collors SET name = :name, updated_at = :updated_at WHERE id = :id";

        $update = $connection->query($query, [
            ':id' => $id,
            ':name' => $collor,
            ':updated_at' => date('Y-m-d h:m:s')
        ]);

        if ($update) {
            return true;
        }

        return false;
    }

    public function destroy($id): bool
    {
        $connection = App::resolve(Connection::class);

        $query = "DELETE FROM collors WHERE id = :id";

        $destroy = $connection->query($query, [':id' => $id]);

        if ($destroy) {

            Sessions::add('success', 'Collor deleted with succcess!');
            return true;
        }

        Sessions::add('error', 'Error to try delete collor!');
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

    // Sections Admin and Users
    public function collorsByUsersId($user)
    {
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM collors WHERE user_id = :user_id";

        $collors = $connection->query($query, [
            ':user_id' => $user
        ])->fetchAll();

        return $collors;
    }

    public function collorsDetailsByUsers($id, $user)
    {
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM collors WHERE id = :id, user_id = :user_id";

        $order = $connection->query($query, [
            ':id' => $id,
            ':user_id' => $user
        ])->fetch();

        return $order;
    }

}