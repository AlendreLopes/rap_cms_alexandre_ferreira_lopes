<?php
	
	function __autoload($classe)
	{
		$pastas = array('filters', 'log', 'plugins');
		foreach ($pastas as $pasta)
		{
			if (file_exists("../{$pasta}/index{$classe}.php"))
			{
				include_once "../{$pasta}/index{$classe}.php";
			}
		}
	}
	
	$SQL = new Connect();
	
	$c_1 = Functions::seg_($_GET['indice']);
	
	$c_2 = $SQL -> Consultar("SELECT _especie AS especie FROM protocolos WHERE protocolo_id = '{$c_1}'");
	
	$c_3 = mysql_result($c_2,0,'especie');
	
	$c_4 = $SQL -> Consultar("SELECT * FROM tb_especies_racas WHERE raca_especie_titulo = '{$c_3}'");
	
	sleep(1);
	
	while($c_5 = mysql_fetch_array($c_4))
	{
		$c_6[utf8_encode($c_5['raca_titulo'])] = utf8_encode($c_5['raca_titulo']);
	}
	
	print json_encode($c_6);
	
	$Otimizar = $SQL -> Consultar("OPTIMIZE TABLE protocolos");
	
?>