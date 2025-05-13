<?php

namespace App\Http\Models;

use App\App;
use App\Common\Database\Connection;
use App\Common\Sessions;
use App\Http\Models\Forms\ProductsDependenciesForm;

class Sizes
{

    public function index()
    {
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM sizes";

        $sizes = $connection->query($query)->fetchAll();

        return $sizes;
    }

    public function show($id)
    {
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM sizes WHERE id = :id";

        $show = $connection->query($query, [
            ':id' => $id
        ])->fetch();

        return $show;
    }

    public function create()
    {
        $sizes = ProductsDependenciesForm::validate($attributes = [
            'name' => $_POST['name'],
        ]);

        $store = $this->store(
            $attributes['name'],
        );

        if (!$store) {

            $sizes->hasErrors('sizes', 'Errors are found on form')->throw();
            return false;

        }

        Sessions::add('success', 'Size registered with succcess!');
        return true;
    }

    public function store($brand): bool
    {
        $connection = App::resolve(Connection::class);

        $query = "INSERT INTO sizes (name, created_at) VALUES (:name, :created_at)";

        $store = $connection->query($query, [
            ':name' => $brand,
            ':created_at' => date('Y-m-d h:m:s')
        ]);

        if ($store) {
            return true;
        }

        return false;
    }
    
    public function edit()
    {
        $size = ProductsDependenciesForm::validate($attributes = [
            'name' => $_POST['name'],
        ]);

        $update = $this->update(
            $_POST['id'],
            $attributes['name'],
        );

        if (!$update) {

            $size->hasErrors('sizes', 'Errors are found on form')->throw();
            return false;

        }

        Sessions::add('success', 'Size updated with succcess!');
        return true;
    }

    public function update($id, $size): bool
    {
        $connection = App::resolve(Connection::class);

        $query = "UPDATE sizes SET name = :name, updated_at = :updated_at WHERE id = :id";

        $update = $connection->query($query, [
            ':id' => $id,
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

        $query = "DELETE FROM sizes WHERE id = :id";

        $destroy = $connection->query($query, [':id' => $id]);

        if ($destroy) {

            Sessions::add('success', 'Size deleted with succcess!');
            return true;
        }

        Sessions::add('error', 'Error to try delete size!');
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
    public function sizesByUsersId($user)
    {
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM sizes WHERE user_id = :user_id";

        $sizes = $connection->query($query, [
            ':user_id' => $user
        ])->fetchAll();

        return $sizes;
    }

    public function sizesDetailsByUsers($id, $user)
    {
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM sizes WHERE id = :id, user_id = :user_id";

        $order = $connection->query($query, [
            ':id' => $id,
            ':user_id' => $user
        ])->fetch();

        return $order;
    }

}