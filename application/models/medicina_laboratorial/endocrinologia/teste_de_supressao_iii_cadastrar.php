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

	$SQL   = new Connect();
	
	$c_0   = Functions::seg_($_POST["laudo"]);
	$c_1   = !empty($_POST["c_1"])  ? Functions::seg_($_POST["c_1"])  : 'Meketrefe';
	$c_2   = !empty($_POST["c_2"])  ? Functions::seg_($_POST["c_2"])  : 'Meketrefe';
	$c_3   = !empty($_POST["c_3"])  ? Functions::seg_($_POST["c_3"])  : 'Meketrefe';
	
	$Resultado = $SQL -> Inserir("INSERT INTO laudos_ml_e_teste_de_supressao_iii
	(
		_laudo,
		_cortisol_basal,
		_cortisol_4_h,
		_cortisol_8_h,
		_concluido
	) 
	VALUES 
	(
		'$c_0',
		'$c_1',
		'$c_2',
		'$c_3',
		NOW()
	)");
	
	sleep(1);
	
	if($Resultado)
	{
		$L_1 = $_SERVER['REMOTE_ADDR'];
		$L_2 = $_COOKIE['sl_hash'];
		$L_3 = "cadastrar";
		$L_4 = "Aчуo Cadastrar Laudo Teste de Supressуo 3 Doses RIA Protocolo: $c_0";
		$L_5 = $SQL -> Inserir("INSERT INTO tb_log (_ip,_data,_usuario,_acao,_texto) VALUES ('$L_1',NOW(),'$L_2','$L_3','$L_4')");
		echo 1;
	}
	else
	{
		echo 0;
	}
	
	$Otimizar = $SQL -> Atualizar("OPTIMIZE TABLE laudos_ml_e_teste_de_supressao_iii");
}

?>