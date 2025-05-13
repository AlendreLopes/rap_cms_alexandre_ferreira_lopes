<?php

namespace App\Http\Controllers;

use App\Common\Sessions;
use App\Http\Models\Brands;

class BrandsController
{
    protected $model;

    public function __construct()
    {
        $this->model = new Brands();
    }

    public function index($views)
    {
        // Title
        $title = 'Brands';
        // 
        $brands = $this->model->index();
        return require httpLayouts('Admin/AdminLayout.php');
    }

    public function show($views, $id)
    {
        // Title
        $title = 'Brand Show Details';
        // 
        $show = $this->model->show($id);
        return require httpLayouts('Admin/AdminLayout.php');
    }

    public function create($views)
    {
        // Title
        $title = 'Brand Create';
        // Errors
        $errors = [];
        $errors['errors'] = Sessions::get('errors');
        $errors['oldData'] = Sessions::get('oldData');
        // 
        return require httpLayouts('Admin/AdminLayout.php');
    }

    public function store()
    {
        return $this->model->create();
    }

    public function edit($views, $id)
    {
        // Title
        $title = 'Brand Edit';
        // Errors
        $errors = [];
        $errors['errors'] = Sessions::get('errors');
        $errors['oldData'] = Sessions::get('oldData');
        // 
        $edit = $this->model->show($id);
        // 
        return require httpLayouts('Admin/AdminLayout.php');
    }

    public function update()
    {
        return $this->model->edit();
    }

    public function delete($id)
    {
        return $this->model->destroy($id);
    }

}
