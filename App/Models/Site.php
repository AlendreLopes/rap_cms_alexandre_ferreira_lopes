<?php

class Site
{
    public function index()  {
        return 'List items to index file';
    }

    
    public function store($id): string {
        return "Model Function Store Id throw: " . $id;
    }
}