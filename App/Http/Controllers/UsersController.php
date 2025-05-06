<?php

namespace App\Http\Controllers;

use App\App;
use App\Common\Database\Connection;
use App\Common\Sessions;
use App\Http\Models\LoginForm;
use App\Http\Models\Users;


class UsersController
{
    protected array $attributes;
    protected $model;

    public function __construct()
    {
        $this->model = new Users();
    }

    public function index($views)
    {
        // Title
        $title = 'User';
        // 
        return require httpLayouts('Users/UserLayout.php');
    }

    public function show(string $views, string $user)
    {
        // Title
        $title = 'Show Details';
        // 
        $user = $this->model->getUserById($user);
        // 
        return require httpLayouts('Users/UserLayout.php');
    }

    public function create($views)
    {
        // Title
        $title = 'Register';
        // 
        // Errors
        $errors = [];
        $errors['errors'] = Sessions::get('errors');
        $errors['oldData'] = Sessions::get('oldData');
        // 
        // User Access Layout
        return require httpLayouts('Users/UserLayoutAccess.php');
    }

    public function store()
    {
        // Call method of the Model User
        return $this->model->store();
    }

    public function edit($views, $user)
    {

        // Title
        $title = 'Edit User';
        // Errors
        $errors = [];
        $errors['errors'] = Sessions::get('errors');
        $errors['oldData'] = Sessions::get('oldData');
        // User
        $user = $this->model->getUserById($user);

        return require httpLayouts('Users/UserLayout.php');

    }

    public function update($id, $title, $description, $status): bool
    {
        // Call method of the Model User
        return $this->model->update($id, $title, $description, $status);
    }

    public function delete($id)
    {
        // Call method of the Model User
        $delete = $this->model->destroy($id);

        if ($delete) {

            Sessions::add('success', 'User deleted with succeess!');

            redirect('/');
        }

        Sessions::add('error', 'User do not deleted!');

        redirect('/');
    }

    public function getUserByEmail($email)
    {
        return $this->model->getUserByEmail($email);
    }

    /**
     * Summary of list orders
     */
    protected function orders()
    {

        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM orders";

        $orders = $connection->query($query)->fetchAll();

        return $orders;

    }

    /**
     * Summary of get order
     * @param mixed $id
     */
    protected function ordersDetails($id)
    {
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM orders WHERE id = :id";

        $order = $connection->query($query, [
            ':id' => $id
        ])->fetch();

        return $order;
    }

    public function login($views)
    {
        // Title
        $title = 'Login';
        // 
        // Errors
        $errors = [];
        $errors['errors'] = Sessions::get('errors');
        $errors['oldData'] = Sessions::get('oldData');
        // 
        // User Access Layout
        return require httpLayouts('Users/UserLayoutAccess.php');
    }

    public function signing()
    {
        // Call method of the Model User
        $this->model->signing();
    }

    public function logout()
    {
        Sessions::destroy();
    }

}
