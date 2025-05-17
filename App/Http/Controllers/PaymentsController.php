<?php

namespace App\Http\Controllers;

use App\Common\Sessions;
use App\Http\Models\Orders;
use App\Http\Models\OrdersItems;
use App\Http\Models\Payments;
use App\Http\Models\Products;
use App\Http\Models\ProductsImages;
use App\Http\Models\Users;
use App\Http\Models\UsersAddress;

class PaymentsController
{
    protected $model;

    protected $orders;

    protected $ordersItems;

    protected $users;
    protected $address;

    protected $products;

    protected $images;

    // protected $orders;

    public function __construct()
    {
        $this->model = new Payments();

        $this->orders = new Orders();
        $this->ordersItems = new OrdersItems();
        $this->products = new Products();
        $this->images = new ProductsImages();
        $this->users = new Users();
        $this->address = new UsersAddress();
    }

    public function index($views)
    {
        // Title
        $title = 'User';
        // User
        $payments = $this->model->usersPayments($_SESSION['rap_cms']['userId']);
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

    public function create($views, $id)
    {
        // 
        $title = 'Payments';
        // 
        $user  = $this->users->show($id);
        // 
        $order = $this->orders->getLastUserOrders($id, date('Y-m-d'));
        // 
        $address = $this->address->getUserAddressById($order['user_address_id']);
        // 
        $orderItems = $this->ordersItems->ordersByUsersId($order['id'], $order['user_id']);
        // 
        $getProducts = [];
        // 
        $getImages = [];
        // 
        foreach ($orderItems as $index => $product) {
            $getProducts[] = $this->products->show($product['product_id']);
            $getImages[] = $this->images->show($product['product_id']);
        }
        // 
        $products = $getProducts;
        $images   = $getImages;
        // 
        return require httpLayouts('Cart/CartLayout.php');
    }

    public function store($user, $ordeId, $transactionId)
    {
        return $this->model->create($user, $ordeId, $transactionId);
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

}
