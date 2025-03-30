<?php
if($_SERVER['REQUEST_METHOD'] == "POST")
{
	
	function __autoload($classe)
	{
		$pastas = array('filters', 'log', 'plugins');
		foreach ($pastas as $pasta)
		{
			if (file_exists("../../../controller/{$pasta}/index{$classe}.php"))
			{
				include_once "../../../controller/{$pasta}/index{$classe}.php";
			}
		}
	}

	$SQL = new Connect();

	$c_0  = Functions::seg_($_POST["laudo"]);

	$c_5   = !empty($_POST["c_5"])  ? Functions::seg_($_POST["c_5"])  : 'Meketrefe';
	$c_6   = !empty($_POST["c_6"])  ? Functions::seg_($_POST["c_6"])  : 'Meketrefe';
	$c_8   = !empty($_POST["c_8"])  ? Functions::seg_($_POST["c_8"])  : 'Meketrefe';
	
	$Resultado = $SQL -> Inserir("INSERT INTO laudos_ml_m_cultura_fungica
	(
		_laudo,
		_cultura_fungica_amostra,
		_cultura_fungica_resultado,
		_observacao,
		_concluido
	) 
	VALUES 
	(
		'$c_0',
		'$c_5',
		'$c_6',
		'$c_8',
		NOW()
	)");
	
	sleep(1);
	
	if($Resultado)
	{
		$L_1 = $_SERVER['REMOTE_ADDR'];
		$L_2 = $_COOKIE['sl_hash'];
		$L_3 = "cadastrar";
		$L_4 = "Aзгo Cadastrar Laudo Microbiologia Cultura Fъngica Protocolo: $c_0";
		$L_5 = $SQL -> Inserir("INSERT INTO tb_log (_ip,_data,_usuario,_acao,_texto) VALUES ('$L_1',NOW(),'$L_2','$L_3','$L_4')");
		echo 1;
	}
	else
	{
		echo 0;
	}
	
	$Otimizar = $SQL -> Atualizar("OPTIMIZE TABLE laudos_ml_m_cultura_fungica");
}

?>