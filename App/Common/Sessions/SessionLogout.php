<?php

namespace Application\Controller\Filters;

setcookie("sl_nome","",0,"/",".localhost");
setcookie("sl_hash","",0,"/",".localhost");

// header ("Location: http://access.localhost/");
header("Location: http://localhost:8003");