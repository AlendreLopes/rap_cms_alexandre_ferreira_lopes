<?php

// Call view page
$views = '403.php';

// Error Layout 403 404 500
require ViewsController::layouts('ErrorLayout.php', [
    'views' => '403.php',
]);
