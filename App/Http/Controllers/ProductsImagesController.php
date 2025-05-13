<?php

namespace App\Http\Controllers;

use App\App;
use App\Common\Sessions;
use App\Http\Models\Products;


class ProductsImagesController
{
    protected $model;

    public function __construct()
    {
        $this->model = new Products();
    }

    public function index($views)
    {
        $products = $this->model->index();

        return require httpLayouts('Admin/AdminLayout.php');
    }

    public function show($views, $id)
    {
        $show = $this->model->show($id);

        return require httpLayouts('Admin/AdminLayout.php');
    }

    public function create($views)
    {
        // Title
        $title = 'Create Product';
        // Errors
        $errors = [];
        $errors['errors'] = Sessions::get('errors');
        $errors['oldData'] = Sessions::get('oldData');
        // 
        return require httpLayouts('Admin/AdminLayout.php');
    }

    public function store()
    {
        $this->model->create();
    }

    public function edit($views, $id)
    {
        // Title
        $title = 'Edit Product';
        // Errors
        $errors = [];
        $errors['errors'] = Sessions::get('errors');
        $errors['oldData'] = Sessions::get('oldData');
        // 
        $details = $this->model->show($id);
        // 
        return require httpLayouts('Admin/AdminLayout.php');
    }

    public function update($id)
    {
        $this->model->edit($id);
    }

    public function delete($id)
    {
        $this->model->destroy($id);
    }


}
