<?php

namespace App;

use App\App;
use App\Common\Database\Connection;
use App\Container;

$container = new Container();

$container->bind(Connection::class, function () {

        // Databases
        // $database = require appCommon('Config/main.php');
        $database = require 'Common/Config/main.php';
        // Connection
        return new Connection($database['databases']['db'], $database['secrets']);

});

// $connection = $container->resolve(Connection::class);

// dd($connection);

App::setContainer($container);
