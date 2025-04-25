<?php

spl_autoload_register(function ($class) {
    
    $folder = 'application/';
    $folders = array(
        $folder,
        $folder . 'common/',
        $folder . 'common/ado/',
        $folder . 'common/config/',
        $folder . 'common/routers/',
        $folder . 'common/sessions/',
        $folder . 'controllers/',
        $folder . 'models/',
        $folder . 'models/mirrors'
    );

    foreach ($folders as $folder) {
        // Make join of array like (join(,'folder'))
        $className = "{$folder}/{$class}.php";
        if (file_exists($className)) {
            require_once $className;
            break;
        }
    }
});
