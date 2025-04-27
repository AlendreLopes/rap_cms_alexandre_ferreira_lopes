<?php

use Application\Common\Database\Connection;
use Application\Controllers\Container;

$container = new Container();

$container->bind('Application\Common\Database', function () {
            // Databases
        $database = Database::databases();
        $secrets = Database::secrets();

        // Connection
        return new Connection($database['db'], $secrets['secrets']);
});