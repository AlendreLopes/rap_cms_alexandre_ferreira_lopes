<?php

class ProductsController
{
    public function index($views)
    {
        require ViewsController::layouts('Products/ProductsLayout.php', [
            'views' => $views,
        ]);
    }

    public function update($id)
    {
        $model = new Site();
        // $model->store($id);
        echo $model->store($id);
    }

    public function login()
    {
        $user = '';
    }

    public function logout()
    {
        $user = '';
    }
}
