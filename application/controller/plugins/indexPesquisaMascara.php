<?php

$mascara  = $SQL -> Consultar("SELECT * FROM protocolos ORDER BY protocolo_id DESC");

$mascaras = mysql_fetch_array($mascara);

$tamanho  = $mascaras[_numero] + 1;

$calcula  = strlen($tamanho);

switch($calcula)
{
	case "1":
		$protocolo = "00000009-99";
	break;
	case "2":
		$protocolo = "00000099-99";
	break;
	case "3":
		$protocolo = "00000999-99";
	break;
	case "4":
		$protocolo = "00009999-99";
		break;
	case "5":
		$protocolo = "00099999-99";
		break;
	case "6":
		$protocolo = "00999999-99";
		break;
	case "7":
		$protocolo = "09999999-99";
		break;
	case "8":
		$protocolo = "99999999-99";
		break;
}


// Exibe a mascara
echo $protocolo;

$Otimizar = $SQL -> Atualizar("OPTIMIZE TABLE protocolos");

?>