<?php

class UserController
{
    protected $views;

    public function __construct(string $view)
    {
        $this->views = $view;
    }

    public function index()
    {
        require ViewsController::layouts('Users/UserLayoutSlot.php', [
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
