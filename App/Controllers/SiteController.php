<?php

class SiteController
{

    public function index(string $views)
    {
        require ViewsController::layouts('GuestLayout.php', [
            'views' => $views,
        ]);
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
