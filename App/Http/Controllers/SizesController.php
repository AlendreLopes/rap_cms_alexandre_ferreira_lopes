<?php

namespace App\Http\Controllers;

use App\Common\Sessions;
use App\Http\Models\Sizes;

class SizesController
{
    protected $model;

    public function __construct()
    {
        $this->model = new Sizes();
    }

    public function index($views)
    {
        // Title
        $title = 'Sizes';
        // 
        $sizes = $this->model->index();
        return require httpLayouts('Admin/AdminLayout.php');
    }

    public function show($views, $id)
    {
        // Title
        $title = 'Size Show Details';
        // 
        $show = $this->model->show($id);
        return require httpLayouts('Admin/AdminLayout.php');
    }

    public function create($views)
    {
        // Title
        $title = 'Size Create';
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
        $title = 'Size Edit';
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
