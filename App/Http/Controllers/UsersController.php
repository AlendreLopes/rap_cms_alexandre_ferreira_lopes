<?php

namespace App\Http\Controllers;

use App\App;
use App\Common\Database\Connection;
use App\Common\Sessions;
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
        // User
        $user = $this->model->getUserById($_SESSION['rap_cms']['userId']);
        // 
        return require httpLayouts('Users/UserLayout.php');
    }

    public function profile(string $views)
    {
        // Title
        $title = 'Profile';
        // 
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
        // 
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

    public function address($views, $user)
    {
        // Title
        $title = 'Address';
        // 
        $userAddress = $this->model->getUserByAddress($user);
        // 
        return require httpLayouts('Users/UserLayout.php');

    }

    public function addressCreate($views)
    {
        // Title
        $title = 'Create Address';
        // 
        return require httpLayouts('Users/UserLayout.php');
    }

    public function addressStore()
    {
        $this->model->addressCreate();
    }

    public function addressEdit($views, $user)
    {
        // Title
        $title = 'Edit Address';
        // 
        $address = $this->model->getUserByAddress($user);
        // 
        return require httpLayouts('Users/UserLayout.php');

    }
    public function addressUpdate($views)
    {
        // 
        return require httpLayouts('Users/UserLayout.php');
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

}
