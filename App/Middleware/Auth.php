<?php

namespace App\Middleware;

class Auth
{
    public function handle()
    {

        if (!isset($_SESSION['rap_cms'])) {

            header('location: /');

            exit();

        }

    }
}