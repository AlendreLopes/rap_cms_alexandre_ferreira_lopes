<?php

class AdminController
{
    protected $views;

    public function __construct(string $getView)
    {
        $this->views = $getView;
    }

    public function index()
    {
        require ViewsController::layouts('Admin/AdminLayoutSlot.php', [
            'view' => $this->views,
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
