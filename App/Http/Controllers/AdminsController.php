<?php

namespace App\Http\Controllers;

use App\App;
use App\Common\Database\Connection;
use App\Common\Sessions;
use App\Http\Models\Admins;
use App\Http\Models\Orders;
use App\Http\Models\Payments;
use App\Http\Models\Products;
use App\Http\Models\Users;
use App\Http\Models\UsersAddress;
use Mmo\Faker\FakeimgProvider;

class AdminsController
{

    protected $model;

    protected $users;

    protected $usersAddress;

    protected $payments;

    protected $products;

    protected $orders;

    /**
     * Summary of __construct
     */
    public function __construct()
    {
        $this->model = new Admins();
        $this->users = new Users();
        $this->usersAddress = new UsersAddress();
        $this->payments = new Payments();
        $this->products = new Products();
        $this->orders = new Orders();
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

    public function usersAdmins($views)
    {
        // Title
        $title = 'Users Administrators';
        // 
        $admins = $this->model->index();
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
        $title = 'Admin Details';
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
        $title = 'Admin Edit';
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
     * @return bool
     */
    public function update($id): bool
    {
        // Call method of the Model Admin
        return $this->model->edit($id);
    }

    public function security($views, $admin)
    {
        // Title
        $title = 'Admin Security Account';
        // 
        // Errors
        $errors = [];
        $errors['errors'] = Sessions::get('errors');
        $errors['oldData'] = Sessions::get('oldData');
        // 
        $admin = $this->model->getAdminById($admin);
        // 
        // User Access Layout
        return require httpLayouts('Admin/AdminLayout.php');

    }

    public function securityAccount($user)
    {
        $this->model->security($user);
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
     * Summary of factory users
     * @param mixed $views
     * @param mixed $quantity
     */
    public function factory($views, $quantity)
    {
        // Title
        $title = "Factory fillable tables";
        // 
        return require httpControllers($views);
    }

    // Orders
    public function orders($views)
    {
        // Title
        $title = 'Orders';
        // 
        $orders = $this->orders->index();
        // 
        return require httpLayouts('Admin/AdminLayout.php');
    }

    public function ordersShow($views, $id)
    {
        // Title
        $title = 'Orders Details';
        // 
        $orders = $this->orders->show($id);
        // 
        return require httpLayouts('Admin/AdminLayout.php');
    }

    // Payments
    public function payments($views)
    {
        // Title
        $title = 'Payments';
        // 
        $payments = $this->payments->index();
        // 
        return require httpLayouts('Admin/AdminLayout.php');
    }

    public function paymentsShow($views, $id)
    {
        // Title
        $title = 'Payments Details';
        // 
        $payments = $this->payments->show($id);
        // 
        return require httpLayouts('Admin/AdminLayout.php');
    }

    // Products
    public function products($views)
    {
        // Title
        $title = 'Products';
        // 
        $products = $this->products->index();
        // 
        return require httpLayouts('Admin/AdminLayout.php');
    }

    public function productsShow($views, $id)
    {
        // Title
        $title = 'Products Details';
        // 
        $product = $this->products->show($id);
        // 
        return require httpLayouts('Admin/AdminLayout.php');
    }

    // Sections Users
    public function users($views)
    {
        // Title
        $title = 'Users';
        // 
        $users = $this->users->index();
        // 
        return require httpLayouts('Admin/AdminLayout.php');
    }

    public function usersShow($views, $id)
    {
        // Title
        $title = 'Users Details';
        //
        // Get User by Id
        $user = $this->users->show($id);
        // 
        // Get User Address by id
        $userAddress = $this->usersAddress->getUserAddressByUser($id);
        // 
        // Get Orders By User Id
        $usersOrders = $this->orders->ordersByUsersId($id);
        // 
        return require httpLayouts('Admin/AdminLayout.php');
    }

}
