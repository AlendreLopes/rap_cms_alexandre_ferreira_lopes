<?php

namespace App\Http\Controllers;

use App\Common\Sessions;
use App\Http\Models\Site;

class SiteController
{
    protected $model;

    public function __construct()
    {
        $this->model = new Site();
    }

    public function index(string $views)
    {
        // Title
        $title = 'RAP CMS';
        // 
        return require httpLayouts('GuestLayout.php', [
            'views' => $views,
        ]);
    }

    /**
     * Summary of contact
     * @param mixed 
     * @return void
     */
    public function contact($views)
    {
        // Title
        $title = 'RAP CMS Contact';
        // 
        return require httpLayouts('GuestLayout.php', [
            'views' => $views,
        ]);

        // 
        // $model = new Site();
        // $model->store($id);
        // echo $model->store();
    }

    public function create($views)
    {
        // Title
        $title = 'Register';
        // 
        // Errors
        $errors = [];
        $errors['errors'] = Sessions::get('errors');
        $errors['oldData'] = Sessions::get('oldData');
        // 
        // User Access Layout
        return require httpLayouts('Users/UserLayoutAccess.php');
    }

    public function store()
    {
        // Call method of the Model User
        return $this->model->store();
    }


    public function login($views)
    {
        // Title
        $title = 'Login';
        // 
        // Errors
        $errors = [];
        $errors['errors'] = Sessions::get('errors');
        $errors['oldData'] = Sessions::get('oldData');
        // 
        // User Access Layout
        return require httpLayouts('Users/UserLayoutAccess.php');
    }

    public function signing()
    {
        // Call method of the Model User
        $this->model->signing();
    }

    public function logout()
    {
        Sessions::destroy();
    }

}
