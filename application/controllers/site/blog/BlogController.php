<?php

class BlogController
{
    public function index()  {
        $this->view('blog.php');
    }

    public function view($viewCall)
    {
        return require $viewCall;
    }
}