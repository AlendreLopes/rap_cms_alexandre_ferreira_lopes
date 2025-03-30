<?php

if(!isset($_COOKIE['sl_nome']) && !isset($_COOKIE['sl_hash']))
{
	// header ("Location: http://access.petimagem.com.br/");
    header("Location: http://localhsot:8003/login/");
	exit();
}