<?php

class RouterController
{
    public function index()
    {
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

    public function logout() {
        $user = '';
    }
}
