<?php

namespace App\Http\Controllers;

use App\Common\Sessions;
use App\Http\Models\Categories;

class CategoriesController
{
    protected $model;

    public function __construct()
    {
        $this->model = new Categories();
    }

    public function index($views)
    {
        // Title
        $title = 'Categories';
        // 
        $categories = $this->model->index();
        return require httpLayouts('Admin/AdminLayout.php');
    }

    public function show($views, $id)
    {
        // Title
        $title = 'Category Show Details';
        // 
        $show = $this->model->show($id);
        return require httpLayouts('Admin/AdminLayout.php');
    }

    public function create($views)
    {
        // Title
        $title = 'Category Create';
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
        $title = 'Category Edit';
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
