<?php

class BlogController
{

    public function index()  {
        require ViewsController::controllers('blog.php');
    }

    public function view($viewCall)
    {
        return require $viewCall;
    }
}