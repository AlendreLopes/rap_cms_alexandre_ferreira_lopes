<?php

namespace App\Http\Controllers;

use App\App;
use App\Http\Models\Products;


class ProductsController
{
    protected $container;

    public function __construct()
    {
        $this->container = new Products();
    }

    public function index($views)
    {
        $products = $this->products();

        return require httpLayouts('Products/ProductsLayout.php');
    }

    public function update($id)
    {
        // $model = new Site();
        // // $model->store($id);
        // echo $model->store($id);
    }

    public function products ()
    {

        return $this->container->products();
        
        // $connection = App::resolve(Connection::class);

        // $query = "SELECT * FROM products";

        // $products = $connection->query($query)->fetchAll();

        // return $products;


    }

    public function details($views, $id)
    {

        $details = $this->container->details($id);

        // $products = App::resolve(Products::class);

        // $details = $products->details($id);

        // return $details;
        
        return require httpLayouts('Products/ProductsLayout.php');

    }
}
