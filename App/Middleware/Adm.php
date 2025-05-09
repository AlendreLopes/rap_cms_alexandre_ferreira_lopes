<?php

namespace App\Middleware;

class Adm
{
    public function handle()
    {

        if (!isset($_SESSION['rap_cms_adm'])) {

            header('location: /administrators/login');

            exit();

        }

    }
}