<?php

namespace Application\Controller\Filters;

if(!isset($_COOKIE['sl_nome']) && !isset($_COOKIE['sl_hash']))
{
	// header ("Location: http://access.localhost/");
    header("Location: http://localhsot:8003/login/");
	exit();
}