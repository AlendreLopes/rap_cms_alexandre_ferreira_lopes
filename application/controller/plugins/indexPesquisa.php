<?php

include_once("/application/controller/filters/indexConnect.php");
include_once("/application/controller/filters/indexFunctions.php");

if(isset($_GET['search_protocol']))
{
	
	$protocolo = Functions::seg_($_GET['search_protocol']);
	
	// search protocols
	$protocolos = $SQL -> Consultar("SELECT _protocolo FROM protocolos WHERE _protocolo LIKE '$protocolo%' LIMIT 5");
	
	// $resultado = mysql_fetch_array($protocolos);
	while($resultado = mysql_fetch_array($protocolos))
	{
		// if it starts with 'search_protocol' add to results
		$results[] = $resultado[0];
	}
	// return the array as json with PHP 5.2
	// echo json_encode($results);
	echo json_encode($results);

}

?>