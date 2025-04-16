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
	
	$c_1 = $SQL -> Consultar("SELECT * FROM tb_convenios ORDER BY convenio_titulo ASC");
	
	while($c_2 = mysql_fetch_array($c_1))
	{
		$c_3[utf8_encode($c_2['convenio_id'])] = utf8_encode($c_2['convenio_titulo']);
	}
	
	print json_encode($c_3);
	
	$Otimizar = $SQL -> Consultar("OPTIMIZE TABLE tb_convenios");
	
?>