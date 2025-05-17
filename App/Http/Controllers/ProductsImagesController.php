<?php

namespace App\Http\Controllers;

use App\App;
use App\Common\Sessions;
use App\Http\Models\ProductsImages;

class ProductsImagesController
{
    protected $model;

    public function __construct()
    {
        $this->model = new ProductsImages();
    }

    public function index($views)
    {
        // Title
        $title = 'Products Images';
        // 
        $images = $this->model->index();
        // 
        return require httpLayouts('Admin/AdminLayout.php');
    }

    public function carouselSite()
    {

        $images = $this->model->carouselSite();
        return $images;

    }

    public function show($views, $id)
    {
        // Title
        $title = 'Show Image';
        // 
        $show = $this->model->show($id);
        // 
        return require httpLayouts('Admin/AdminLayout.php');
    }

    public function create($views, $product_id)
    {
        // Title
        $title = 'Create Image';
        $product = $product_id;
        // Errors
        $errors = [];
        $errors['errors'] = Sessions::get('errors');
        $errors['oldData'] = Sessions::get('oldData');
        // 
        return require httpLayouts('Admin/AdminLayout.php');
    }

    public function store($adm)
    {
        return $this->model->create($adm);
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
