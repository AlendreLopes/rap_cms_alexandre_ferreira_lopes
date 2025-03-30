<?php

setcookie("sl_nome","",time() - 60 * 60 * 24 * 10,"/",".petimagem.com.br");
setcookie("sl_hash","",time() - 60 * 60 * 24 * 10,"/",".petimagem.com.br");

// header ("Location: http://access.petimagem.com.br/");
header("Location: http://localhsot:8003");