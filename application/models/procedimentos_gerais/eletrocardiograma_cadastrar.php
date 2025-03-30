<?php
if($_SERVER['REQUEST_METHOD'] == "POST")
{
	
	function __autoload($classe)
	{
		$pastas = array('filters', 'log', 'plugins');
		foreach ($pastas as $pasta)
		{
			if (file_exists("../../controller/{$pasta}/index{$classe}.php"))
			{
				include_once "../../controller/{$pasta}/index{$classe}.php";
			}
		}
	}

	$SQL = new Connect();

	// Recupera os Dados
	
	$c_0  = Functions::seg_($_POST["laudo"]);
	
	$c_2  = !empty($_POST["c_2"]) ? Functions::seg_($_POST["c_2"]) : "Meketrefe";
	
	$c_3  = !empty($_POST["c_3"]) ? Functions::seg_($_POST["c_3"]) : "Meketrefe";
	
	$c_4  = !empty($_POST["c_4"]) ? Functions::seg_($_POST["c_4"]) : "Meketrefe";
	
	$c_5  = !empty($_POST["c_5"]) ? Functions::seg_($_POST["c_5"]) : "Meketrefe";
	
	$c_6  = !empty($_POST["c_6"]) ? Functions::seg_($_POST["c_6"]) : "Meketrefe";
	
	$c_7  = !empty($_POST["c_7"]) ? Functions::seg_($_POST["c_7"]) : "Meketrefe";
	
	$c_8  = !empty($_POST["c_8"]) ? Functions::seg_($_POST["c_8"]) : "Meketrefe";
	
	$c_9  = !empty($_POST["c_9"]) ? Functions::seg_($_POST["c_9"]) : "Meketrefe";
	
	$c_10 = !empty($_POST["c_10"]) ? Functions::seg_($_POST["c_10"]) : "Meketrefe";
	
	$c_11 = !empty($_POST["c_11"]) ? Functions::seg_($_POST["c_11"]) : "Meketrefe";
	
	$c_12 = !empty($_POST["c_12"]) ? Functions::seg_($_POST["c_12"]) : "Meketrefe";
	
	$c_13 = !empty($_POST["c_13"]) ? Functions::seg_($_POST["c_13"]) : "Meketrefe";
	
	$c_14 = !empty($_POST["c_14"]) ? Functions::seg_($_POST["c_14"]) : "Meketrefe";
	
	$Resultado = $SQL -> Inserir("INSERT INTO laudos_sc_eletrocardiograma
	(
		_laudo,
		_batimento,
		_ritmo,
		_eixo,
		_ondap,
		_ondap_s,
		_pr,
		_qrs,
		_r,
		_st,
		_t,
		_qt,
		_outros,
		_interpretacao,
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
		'$c_10',
		'$c_11',
		'$c_12',
		'$c_13',
		'$c_14',
		NOW()
	)");
	
	sleep(1);
	
	if($Resultado)
	{
		$L_1 = $_SERVER['REMOTE_ADDR'];
		$L_2 = $_COOKIE['sl_hash'];
		$L_3 = "cadastrar";
		$L_4 = "Aчуo Cadastrar Laudo Eletrocardiograma Protocolo: $c_0";
		$L_5 = $SQL -> Inserir("INSERT INTO tb_log (_ip,_data,_usuario,_acao,_texto) VALUES ('$L_1',NOW(),'$L_2','$L_3','$L_4')");
		echo 1;
	}
	else
	{
		echo 0;
	}
	
	$Otimizar = $SQL -> Atualizar("OPTIMIZE TABLE laudos_sc_eletrocardiograma");
	
}

?>