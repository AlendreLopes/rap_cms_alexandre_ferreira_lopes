<?php

namespace App\Middleware;

class Adm
{
    public function handle()
    {

        if (!isset($_SESSION['rap_cms']['userAdm'])) {

            header('location: /administrators/login');

            exit();

        }

    }
}