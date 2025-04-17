<?php

// Get controller of routers
include 'application/controllers/controller.php';

$routers = include 'application/routers.php';

// This a generic slot to hold all uri
controller($_SERVER['REQUEST_URI'], $routers['routers']['users']);