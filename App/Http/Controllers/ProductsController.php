<?php

namespace App\Http\Controllers;

use App\Common\Sessions;
use App\Http\Models\Brands;
use App\Http\Models\Categories;
use App\Http\Models\Collors;
use App\Http\Models\Products;
use App\Http\Models\ProductsImages;
use App\Http\Models\Sizes;

class ProductsController
{
    protected $model;

    protected $brands;

    protected $categories;

    protected $collors;

    protected $sizes;

    protected $images;

    public function __construct()
    {
        $this->model = new Products();
        $this->brands = new Brands();
        $this->categories = new Categories();
        $this->collors = new Collors();
        $this->sizes = new Sizes();
        $this->images = new ProductsImages();
    }

    public function productsSite($views)
    {
        $products = $this->model->productsSite();
        return require httpLayouts('Products/ProductsLayout.php');
    }

    public function showProductsSite($views, $id)
    {
        $produtcDetails = $this->model->show($id);
        $produtcDetailsImages = $this->images->show($id);
        return require httpLayouts('Products/ProductsLayout.php');
    }

    public function indexProductsSite()
    {
        $products = $this->model->productsSite();
        return $products;
    }

    public function index($views)
    {
        // Title
        $title = 'Products';
        // 
        $products = $this->model->index();
        return require httpLayouts('Admin/AdminLayout.php');
    }

    public function show($views, $id)
    {
        // Title
        $title = 'Product Show';
        // 
        $show = $this->model->show($id);
        $images = $this->images->show($id);
        return require httpLayouts('Admin/AdminLayout.php');
    }

    public function create($views)
    {
        // Title
        $title = 'Product Create';
        // Errors
        $errors = [];
        $errors['errors'] = Sessions::get('errors');
        $errors['oldData'] = Sessions::get('oldData');
        // 
        $brands = $this->brands->index();
        $categories = $this->categories->index();
        $collors = $this->collors->index();
        $sizes = $this->sizes->index();
        // 
        return require httpLayouts('Admin/AdminLayout.php');
    }

    public function store($user)
    {
        return $this->model->create($user);
    }

    public function edit($views, $id)
    {
        // Title
        $title = 'Product Edit';
        // Errors
        $errors = [];
        $errors['errors'] = Sessions::get('errors');
        $errors['oldData'] = Sessions::get('oldData');
        // 
        $edit = $this->model->show($id);
        // 
        $brands = $this->brands->index();
        $categories = $this->categories->index();
        $collors = $this->collors->index();
        $sizes = $this->sizes->index();
        // 
        return require httpLayouts('Admin/AdminLayout.php');
    }

    public function update($id, $user)
    {
        return $this->model->edit($id, $user);
    }

    public function delete($id)
    {
        return $this->model->destroy($id);
    }
}
