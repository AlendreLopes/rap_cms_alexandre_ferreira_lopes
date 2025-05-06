<?php

namespace App\Http\Controllers;

use App\App;
use App\Common\Database\Connection;
use App\Common\Sessions;
use App\Http\Models\LoginForm;

class SiteController
{

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

}
