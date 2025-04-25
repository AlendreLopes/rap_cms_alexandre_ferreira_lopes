<?php

class SiteController
{

    public function index()
    {
        require ViewsController::layouts('GuestLayout.php');
    }

    /**
     * Summary of contact
     * @param mixed 
     * @return void
     */
    public function contact()
    {
        // 
        $model = new Site();
        // $model->store($id);
        // echo $model->store();
    }

    public function login()
    {
        $user = '';
    }

    public function logout() {
        $user = '';
    }
}
