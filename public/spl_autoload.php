<?php

spl_autoload_register(function ($class) {

    $folder = BASE_PATH . 'App/';
    $folders = array(
        $folder,
        $folder . 'Common/',
        $folder . 'Common/Config/',
        $folder . 'Common/Database/',
        $folder . 'Common/Middleware/',
        $folder . 'Common/Routers/',
        $folder . 'Common/Sessions/',
        $folder . 'Controllers/',
        $folder . 'Models/',
        $folder . 'Models/Entity',
        $folder . 'Models/Mirrors'
    );

    foreach ($folders as $folder) {

        try {
            
            $className = "{$folder}/{$class}.php";

            if (file_exists($className)) {
                require_once $className;
                break;
            }

        } catch (\Throwable $th) {
            //throw $th;
            throw new Exception("Error Processing Request {$th->getMessage()}");
            
        }
    }

});
