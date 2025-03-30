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
	
	$c_0 = Functions::seg_($_POST["laudo"]);
	
	$c_2 = !empty($_POST["c_2"]) ? Functions::seg_($_POST["c_2"]) : "Negativo";
	
	$c_3 = !empty($_POST["c_3"]) ? Functions::seg_($_POST["c_3"]) : "Negativo";
	
	$c_4 = !empty($_POST["c_4"]) ? Functions::seg_($_POST["c_4"]) : "Negativo";
	
	$c_5 = !empty($_POST["c_5"]) ? Functions::seg_($_POST["c_5"]) : "Negativo";
	
	$c_6 = !empty($_POST["c_6"]) ? Functions::seg_($_POST["c_6"]) : "Negativo";
	
	$c_7 = !empty($_POST["c_7"]) ? Functions::seg_($_POST["c_7"]) : "Negativo";
	
	$c_8 = !empty($_POST["c_8"]) ? Functions::seg_($_POST["c_8"]) : "Negativo";
	
	$c_9 = !empty($_POST["c_9"]) ? Functions::seg_($_POST["c_9"]) : "Meketrefe";
	
	$c_9_1 = !empty($_POST["c_9_1"]) ? Functions::seg_($_POST["c_9_1"]) : "Meketrefe";
	
	$c_10 = !empty($_POST["c_10"]) ? Functions::seg_($_POST["c_10"]) : "Meketrefe";
	
	$Resultado = $SQL -> Inserir("INSERT INTO laudos_ml_p_coproparasitologico_ii
	(
		_laudo,
		_cyathostomum,
		_habronema,
		_oxyuris,
		_parascaris,
		_strongyloides,
		_strongylus,
		_candida,
		_em_branco,
		_em_branco_,
		_outros,
		_concluido
	) 
	VALUES 
	(
		'$c_0',
		'$c_2',
		'$c_3',
		'$c_4',
		'$c_5',
		'$c_6',
		'$c_7',
		'$c_8',
		'$c_9',
		'$c_9_1',
		'$c_10',
		NOW()
	)");
	
	sleep(1);
	
	if($Resultado)
	{
		$L_1 = $_SERVER['REMOTE_ADDR'];
		$L_2 = $_COOKIE['sl_hash'];
		$L_3 = "cadastrar";
		$L_4 = "Ação Cadastrar Laudo Coproparasitológico Eqüino Protocolo: $c_0";
		$L_5 = $SQL -> Inserir("INSERT INTO tb_log (_ip,_data,_usuario,_acao,_texto) VALUES ('$L_1',NOW(),'$L_2','$L_3','$L_4')");
		echo 1;
	}
	else
	{
		echo 0;
	}
	
	$Otimizar = $SQL -> Atualizar("OPTIMIZE TABLE laudos_ml_p_coproparasitologico_ii");
	
}
?>