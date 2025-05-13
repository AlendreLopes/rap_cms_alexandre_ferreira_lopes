<?php

namespace App\Http\Models;

use App\App;
use App\Common\Database\Connection;
use App\Common\Sessions;
use App\Http\Models\Forms\ProductsDependenciesForm;
class Brands
{

    public function index()
    {
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM brands";

        $brands = $connection->query($query)->fetchAll();

        return $brands;
    }

    public function show($id)
    {
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM brands WHERE id = :id";

        $show = $connection->query($query, [
            ':id' => $id
        ])->fetch();

        return $show;
    }

    public function create()
    {
        $brands = ProductsDependenciesForm::validate($attributes = [
            'name' => $_POST['name'],
        ]);

        $store = $this->store(
            $attributes['name'],
        );

        if (!$store) {

            $brands->hasErrors('brands', 'Errors are found on form')->throw();
            return false;

        }

        Sessions::add('success', 'Brand registered with succcess!');
        return true;
    }

    public function store($brand): bool
    {
        $connection = App::resolve(Connection::class);

        $query = "INSERT INTO brands (name, created_at) VALUES (:name, :created_at)";

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
        $brand = ProductsDependenciesForm::validate($attributes = [
            'name' => $_POST['name'],
        ]);

        $update = $this->update(
            $_POST['id'],
            $attributes['name'],
        );

        if (!$update) {

            $brand->hasErrors('brans', 'Errors are found on form')->throw();
            return false;

        }

        Sessions::add('success', 'Brand updated with succcess!');
        return true;
    }

    public function update($id, $brand): bool
    {
        $connection = App::resolve(Connection::class);

        $query = "UPDATE brands SET name = :name, updated_at = :updated_at WHERE id = :id";

        $update = $connection->query($query, [
            ':id' => $id,
            ':name' => $brand,
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

        $query = "DELETE FROM brands WHERE id = :id";

        $destroy = $connection->query($query, [':id' => $id]);

        if ($destroy) {

            Sessions::add('success', 'Brand deleted with succcess!');
            return true;
        }

        Sessions::add('error', 'Error to try delete brand!');
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
    public function brandsByUsersId($user)
    {
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM brands WHERE user_id = :user_id";

        $brands = $connection->query($query, [
            ':user_id' => $user
        ])->fetchAll();

        return $brands;
    }

    public function brandsDetailsByUsers($id, $user)
    {
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM brands WHERE id = :id, user_id = :user_id";

        $order = $connection->query($query, [
            ':id' => $id,
            ':user_id' => $user
        ])->fetch();

        return $order;
    }

}