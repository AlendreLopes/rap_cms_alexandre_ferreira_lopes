<?php

namespace App\Http\Controllers;

use App\Http\Models\Cart;
use App\Http\Models\Products;
use App\Http\Models\ProductsImages;
use App\Http\Models\Users;

class CartController
{
    protected $model;

    protected $products;

    protected $images;

    protected $users;

    public function __construct()
    {
        $this->model = new Cart();
        $this->products = new Products();
        $this->images = new ProductsImages();
        $this->users = new Users();
    }

    public function index($views, $cart)
    {
        // Title
        $title = 'Cart';
        // 
        $productInCart = $cart;
        return require httpLayouts('Cart/CartLayout.php');
    }

    public function checkout($views, $products, $amount, $usersData, $usersAddress)
    {
        // Title
        $title = 'Checkout';
        // Cart Products
        $cartProduct = $products;
        // Ca
        $cartProductsAmount = $amount;
        // Get Cart Total Products
        $cartProductsTotal = count($products);
        // User Data and Address
        $userData    = $usersData;
        $userAddress = $usersAddress;
        //
        return require httpLayouts('Cart/CartLayout.php');
    }

    public function getProduct($id)
    {
        $produtcDetails = $this->products->show($id);
        $produtcDetailsImages = $this->images->show($id);
        $result = array_merge($produtcDetails, $produtcDetailsImages);
        return $result;
    }

    public function getCartProducts()
    {
        return $this->model->cart();
    }


    public function add($products)
    {
        return $this->model->add($products);
    }

    public function update($id)
    {
        return $this->model->update($id);
    }

    public function store($id)
    {
        return $this->model->store($id);
    }

    public function remove($id)
    {
        return $this->model->remove($id);
    }


    public function delete()
    {
        return $this->model->destroy();
    }
}
