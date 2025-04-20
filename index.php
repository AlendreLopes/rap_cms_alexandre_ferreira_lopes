<?php

const BASE_PATH = __DIR__ . '/../';

// Views
require 'application/controllers/views.php';
// Functions
require Views::library('filters/Functions.php');
// Response
require Views::library('filters/Response.php');
// Enums
require Views::library('filters/enums/EnumStatus.php');
// Validator
require Views::library('filters/Validator.php');
// Conection
require Views::common('ado/Connection.php');
// Databases
$database   = require Views::common('config/databases.php');
// Connections
$connection = new Connection($database['databases']['db'], $database['secrets']);
// Router
require Views::routers('router.php');
// Guest Router Content
require Views::layouts('GuestLayoutSlot.php');
