<?php

namespace App\Middleware;

class Guest
{
    public function handle() 
    {

        if ($_SESSION['rap_cms'] ?? false) {

            header('location: /');

            exit();

        }

    }
}