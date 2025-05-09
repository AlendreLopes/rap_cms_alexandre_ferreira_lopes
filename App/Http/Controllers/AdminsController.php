<?php

namespace App\Http\Controllers;

use App\App;
use App\Common\Database\Connection;
use App\Common\Sessions;
use App\Http\Models\Admins;
use Mmo\Faker\FakeimgProvider;

class AdminsController
{

    protected array $attributes;
    protected $model;

    /**
     * Summary of __construct
     */
    public function __construct()
    {
        $this->model = new Admins();
    }

    /**
     * Summary of index
     * @param mixed $views
     */
    public function index($views)
    {
        // Title
        $title = 'Administrator';
        // 
        return require httpLayouts('Admin/AdminLayout.php');
    }

    /**
     * Summary of show
     * @param string $views
     * @param string $admin
     */
    public function show(string $views, string $admin)
    {
        // Title
        $title = 'Show Details';
        // 
        $admin = $this->model->getAdminById($admin);
        // 
        return require httpLayouts('Admin/AdminLayout.php');
    }

    /**
     * Summary of create
     * @param mixed $views
     */
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
        return require httpLayouts('Admin/AdminLayoutAccess.php');
    }

    /**
     * Summary of store
     * @return bool
     */
    public function store()
    {
        // Call method of the Model User
        return $this->model->store();
    }

    /**
     * Summary of edit
     * @param mixed $views
     * @param mixed $admin
     */
    public function edit($views, $admin)
    {
        // Title
        $title = 'Edit User';
        // Errors
        $errors = [];
        $errors['errors'] = Sessions::get('errors');
        $errors['oldData'] = Sessions::get('oldData');
        // User
        $admin = $this->model->getAdminById($admin);
        // 
        return require httpLayouts('Admin/AdminLayout.php');
    }

    /**
     * Summary of update
     * @param mixed $id
     * @param mixed $username
     * @param mixed $email
     * @param mixed $password
     * @return bool
     */
    public function update($id, $username, $email, $password): bool
    {
        // Call method of the Model User
        return $this->model->update($id, $username, $email, $password);
    }

    /**
     * Summary of delete
     * @param mixed $id
     * @return never
     */
    public function delete($id)
    {
        // Call method of the Model User
        $delete = $this->model->destroy($id);

        if ($delete) {

            Sessions::add('success', 'Admin deleted with succeess!');

            redirect('/');
        }

        Sessions::add('error', 'Admin do not deleted!');

        redirect('/');
    }

    /**
     * Summary of getAdminByEmail
     * @param mixed $email
     */
    public function getAdminByEmail($email)
    {
        return $this->model->getAdminByEmail($email);
    }

    /**
     * Summary of login
     * @param mixed $views
     */
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
        return require httpLayouts('Admin/AdminLayoutAccess.php');
    }

    /**
     * Summary of signing
     * @return void
     */
    public function signing()
    {
        // Call method of the Model User
        $this->model->signing();
    }

    /**
     * Summary of logout
     * @return void
     */
    public function logout()
    {
        Sessions::destroy();
    }

    /**
     * Summary of orders
     */
    public function orders($views)
    {
        // Title
        $title = 'Orders';
        // 
        $orders = $this->model->orders();
        // 
        return require httpLayouts('Admin/AdminLayout.php');
    }

    public function ordersDetails($views, $id)
    {
        // Title
        $title = 'Orders Details';
        // 
        $orders = $this->model->ordersDetails($id);
        // 
        return require httpLayouts('Admin/AdminLayout.php');
    }

    public function payments($views)
    {
        // Title
        $title = 'Payments';
        // 
        $payments = $this->model->payments();
        // 
        return require httpLayouts('Admin/AdminLayout.php');
    }

    public function paymentsDetails($views, $id)
    {
        // Title
        $title = 'Payments Details';
        // 
        $payments = $this->model->paymentsDetails($id);
        // 
        return require httpLayouts('Admin/AdminLayout.php');
    }

    public function products($views)
    {
        // Title
        $title = 'Products';
        // 
        $products = $this->model->products();
        // 
        return require httpLayouts('Admin/AdminLayout.php');
    }

    public function productsDetails($views, $id)
    {
        // Title
        $title = 'Products Details';
        // 
        $products = $this->model->productsDetails($id);
        // 
        return require httpLayouts('Admin/AdminLayout.php');
    }

    public function users($views)
    {
        // Title
        $title = 'Users';
        // 
        // $faker = \Faker\Factory::create();
        // $faker->addProvider(new FakeimgProvider($faker));
        $users = $this->model->users();
        // 
        return require httpLayouts('Admin/AdminLayout.php');
    }

    public function usersDetails($views, $id)
    {
        // Title
        $title = 'Users Details';
        // 
        $details = $this->model->usersDetails($id);
        // 
        return require httpLayouts('Admin/AdminLayout.php');
    }

    public function factory($views, $quantity)
    {
        // Title
        $title = "Factory fillable tables";
        // 
        return require httpControllers($views);
    }
}
