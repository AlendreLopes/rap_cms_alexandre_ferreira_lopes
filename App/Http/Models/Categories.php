<?php

namespace App\Http\Models;

use App\App;
use App\Common\Database\Connection;
use App\Common\Sessions;
use App\Http\Models\Forms\ProductsDependenciesForm;

class Categories
{

    public function index()
    {
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM categories";

        $categories = $connection->query($query)->fetchAll();

        return $categories;
    }

    public function show($id)
    {
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM categories WHERE id = :id";

        $show = $connection->query($query, [
            ':id' => $id
        ])->fetch();

        return $show;
    }

    public function create()
    {
        $categories = ProductsDependenciesForm::validate($attributes = [
            'name' => $_POST['name'],
        ]);

        $store = $this->store(
            $attributes['name'],
        );

        if (!$store) {

            $categories->hasErrors('categories', 'Errors are found on form')->throw();
            return false;

        }

        Sessions::add('success', 'Category registered with succcess!');
        return true;
    }

    public function store($category): bool
    {
        $connection = App::resolve(Connection::class);

        $query = "INSERT INTO categories (name, created_at) VALUES (:name, :created_at)";

        $store = $connection->query($query, [
            ':name' => $category,
            ':created_at' => date('Y-m-d h:m:s')
        ]);

        if ($store) {
            return true;
        }

        return false;
    }
    
    public function edit()
    {
        $category = ProductsDependenciesForm::validate($attributes = [
            'name' => $_POST['name'],
        ]);

        $update = $this->update(
            $_POST['id'],
            $attributes['name'],
        );

        if (!$update) {

            $category->hasErrors('categories', 'Errors are found on form')->throw();
            return false;

        }

        Sessions::add('success', 'Category updated with succcess!');
        return true;
    }

    public function update($id, $category): bool
    {
        $connection = App::resolve(Connection::class);

        $query = "UPDATE categories SET name = :name, updated_at = :updated_at WHERE id = :id";

        $update = $connection->query($query, [
            ':id' => $id,
            ':name' => $category,
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

        $query = "DELETE FROM categories WHERE id = :id";

        $destroy = $connection->query($query, [':id' => $id]);

        if ($destroy) {

            Sessions::add('success', 'Category deleted with succcess!');
            return true;
        }

        Sessions::add('error', 'Error to try delete category!');
        return false;
    }

    public function factory($number)
    {
        $faker = \Faker\Factory::create();

        $connection = App::resolve(Connection::class);

        for ($i = 0; $i < $number; $i++) {
            $connection->query("INSERT INTO categories(username, email, password, status, created_at) VALUES (:username, :email, :password, :status, :created_at)", [
                ':username' => $faker->name(),
                ':email' => $faker->unique()->email(),
                ':password' => password_hash("password!", PASSWORD_BCRYPT),
                ':status' => 10,
                ':created_at' => date("Y-m-d H:i:s"),
            ]);
        }

    }

    // Sections Admin and Users
    public function categoriesByUsersId($user)
    {
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM categories WHERE user_id = :user_id";

        $categories = $connection->query($query, [
            ':user_id' => $user
        ])->fetchAll();

        return $categories;
    }

    public function categoriesDetailsByUsers($id, $user)
    {
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM categories WHERE id = :id, user_id = :user_id";

        $order = $connection->query($query, [
            ':id' => $id,
            ':user_id' => $user
        ])->fetch();

        return $order;
    }

}