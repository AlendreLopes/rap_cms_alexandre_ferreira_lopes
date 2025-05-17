<?php

namespace App\Http\Controllers;

use App\Common\Sessions;
use App\Http\Models\Orders;
use App\Http\Models\Users;
use App\Http\Models\UsersAddress;

class UsersController
{
    protected $model;

    protected $address;

    protected $orders;

    public function __construct()
    {
        $this->model = new Users();
        $this->address = new UsersAddress();
        $this->orders = new Orders();
    }

    public function index($views)
    {
        // Title
        $title = 'User';
        // User
        $user = $this->model->show($_SESSION['rap_cms']['userId']);
        // 
        return require httpLayouts('Users/UserLayout.php');
    }

    public function show(string $views, string $user)
    {
        // Title
        $title = 'Show Details';
        // 
        $user = $this->model->show($user);
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
        $user = $this->model->show($user);
        // 
        return require httpLayouts('Users/UserLayout.php');
    }

    public function update($user)
    {
        // Call method of the Model User
        $this->model->edit($user);
    }

    public function security($views, $user)
    {
        // Title
        $title = 'Security Account';
        // Errors
        $errors = [];
        $errors['errors'] = Sessions::get('errors');
        $errors['oldData'] = Sessions::get('oldData');
        // User
        $user = $this->model->show($user);
        // 
        return require httpLayouts('Users/UserLayout.php');
    }

    public function securityAccount($user)
    {
        $this->model->security($user);
    }

    public function delete($id)
    {
        // Call method of the Model User
        $delete = $this->model->destroy($id);

        if ($delete) {

            Sessions::add('success', 'User deleted with succeess!');

            redirect('/dashboard');
        }

        Sessions::add('error', 'User do not deleted!');

        redirect('/dashboard');
    }

    public function userDataCheckout($id)
    {
        $user = $this->model->show($id);
        return $user;
    }

    public function userAddressCheckout($id)
    {
        $user = $this->address->getUserAddressByUser($id);
        return $user;
    }

    public function orders(string $views, $user)
    {
        // Title
        $title = 'Orders';
        // 
        $orders = $this->orders->ordersByUsersId($user);
        // 
        return require httpLayouts('Users/UserLayout.php');
    }

    public function ordersDetails(string $views,  $order, $user)
    {
        // Title
        $title = 'Orders Details';
        // 
        $userData = $this->userDataCheckout($user);
        $order = $this->orders->ordersByIdAndByUsersId($order, $user);
        $orderId = $order['id'];
        $orders = $this->orders->ordersByUsersId($user);
        // 
        return require httpLayouts('Users/UserLayout.php');
    }

    public function ordersCreate($product)
    {
        $this->orders->create( $product);
    }
}
