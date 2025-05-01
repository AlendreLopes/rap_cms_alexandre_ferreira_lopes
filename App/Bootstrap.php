<?php

use App\App;
use App\Container;
use App\Database\Connection;


$container = new Container();

$container->bind('App\Database\Connection', function () {

        // Databases
        $database = require appCommon('Config/main.php');
        // Connection
        return new Connection($database['databases']['db'], $database['secrets']);

});

// $connection = $container->resolver(Connection::class);

App::setContainer($container);
