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
	
	$c_2 = !empty($_POST["c_2"]) ? Functions::seg_($_POST["c_2"]) : "Meketrefe";
	
	$c_3 = !empty($_POST["c_3"]) ? Functions::seg_($_POST["c_3"]) : "Meketrefe";
	
	$c_4 = !empty($_POST["c_4"]) ? Functions::seg_($_POST["c_4"]) : "Meketrefe";
	
	$c_5 = !empty($_POST["c_5"]) ? Functions::seg_($_POST["c_5"]) : "Meketrefe";
	
	$c_6 = !empty($_POST["c_6"]) ? Functions::seg_($_POST["c_6"]) : "Meketrefe";
	
	$c_7 = !empty($_POST["c_7"]) ? Functions::seg_($_POST["c_7"]) : "Meketrefe";
	
	$c_8 = !empty($_POST["c_8"]) ? Functions::seg_($_POST["c_8"]) : "Meketrefe";
	
	$c_9 = !empty($_POST["c_9"]) ? Functions::seg_($_POST["c_9"]) : "Meketrefe";
	
	$c_10 = !empty($_POST["c_10"]) ? Functions::seg_($_POST["c_10"]) : "Meketrefe";
	
	$c_11 = !empty($_POST["c_11"]) ? Functions::seg_($_POST["c_11"]) : "Meketrefe";
	
	$c_12 = !empty($_POST["c_12"]) ? Functions::seg_($_POST["c_12"]) : "Meketrefe";
	
	$c_13 = !empty($_POST["c_13"]) ? Functions::seg_($_POST["c_13"]) : "Meketrefe";
	
	$c_14 = !empty($_POST["c_14"]) ? Functions::seg_($_POST["c_14"]) : "Meketrefe";
	
	$c_15 = !empty($_POST["c_15"]) ? Functions::seg_($_POST["c_15"]) : "Meketrefe";
	
	$c_16 = !empty($_POST["c_16"]) ? Functions::seg_($_POST["c_16"]) : "Meketrefe";
	
	$c_17 = !empty($_POST["c_17"]) ? Functions::seg_($_POST["c_17"]) : "Meketrefe";
	
	$c_18 = !empty($_POST["c_18"]) ? Functions::seg_($_POST["c_18"]) : "Meketrefe";
	
	$c_19 = !empty($_POST["c_19"]) ? Functions::seg_($_POST["c_19"]) : "Meketrefe";
	
	// Basуfilos
	$c_19_1= !empty($_POST["c_19_1"]) ? Functions::seg_($_POST["c_19_1"]) : "Meketrefe";
	
	$c_19_2= !empty($_POST["c_19_2"]) ? Functions::seg_($_POST["c_19_2"]) : "Meketrefe";
	// Outros
	$c_19_3= !empty($_POST["c_19_3"]) ? Functions::seg_($_POST["c_19_3"]) : "Meketrefe";
	// Outros Absoluto - VHS 10'
	// $c_19_4= !empty($_POST["c_19_4"]) ? Functions::seg_($_POST["c_19_4"]) : "Meketrefe";
	$c_19_4= !empty($_POST["c_22_1"]) ? Functions::seg_($_POST["c_22_1"]) : "Meketrefe";
	// Outros Relativo - VHS 20'
	// $c_19_5= !empty($_POST["c_19_5"]) ? Functions::seg_($_POST["c_19_5"]) : "Meketrefe";
	$c_19_5= !empty($_POST["c_22_2"]) ? Functions::seg_($_POST["c_22_2"]) : "Meketrefe";
	
	$c_19_6= !empty($_POST["c_19_6"]) ? Functions::seg_($_POST["c_19_6"]) : "Meketrefe";
	
	$c_19_7= !empty($_POST["c_19_7"]) ? Functions::seg_($_POST["c_19_7"]) : "Meketrefe";
	
	// Proteinas - V.H.S
	$c_20 = !empty($_POST["c_20"]) ? Functions::seg_($_POST["c_20"]) : "Meketrefe";
	
	$c_21 = !empty($_POST["c_21"]) ? Functions::seg_($_POST["c_21"])     : "Meketrefe";
	
	$c_22 = !empty($_POST["c_22"]) ? Functions::seg_($_POST["c_22"])     : "Meketrefe";
	
	$c_23 = !empty($_POST["c_23"]) ? Functions::seg_($_POST["c_23"])     : "Meketrefe";
	
	
	
	$Resultado = $SQL -> Inserir("INSERT INTO laudos_ml_h_hemograma_equino
	(
		_laudo,
		_hemaceas,
		_hemoglobina,
		_hematocrito,
		_vcm,
		_hcm,
		_chcm,
		_aspecto_celular,
		_leucocitos,
		_eosinofilos_a,
		_eosinofilos_r,
		_linfocitos_a,
		_linfocitos_r,
		_monocitos_a,
		_monocitos_r,
		_bastonetes_a,
		_bastonetes_r,
		_segmentados_a,
		_segmentados_r,
		_basofilos_a,
		_basofilos_r,
		_outros,
		_outros_a,
		_outros_r,
		_outros_n_a,
		_outros_n_b,
		_plaquetas,
		_proteina_plasmatica,
		_fibrogenio,
		_observacao,
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
		'$c_15',
		'$c_16',
		'$c_17',
		'$c_18',
		'$c_19',
		'$c_19_1',
		'$c_19_2',
		'$c_19_3',
		'$c_19_4',
		'$c_19_5',
		'$c_19_6',
		'$c_19_7',
		'$c_20',
		'$c_21',
		'$c_22',
		'$c_23',
		NOW()
	)");
	
	sleep(1);
	
	if($Resultado)
	{
		$L_1 = $_SERVER['REMOTE_ADDR'];
		$L_2 = $_COOKIE['sl_hash'];
		$L_3 = "cadastrar";
		$L_4 = "Aзгo Cadastrar Laudo Hemograma Equino Protocolo: $c_0";
		$L_5 = $SQL -> Inserir("INSERT INTO tb_log (_ip,_data,_usuario,_acao,_texto) VALUES ('$L_1',NOW(),'$L_2','$L_3','$L_4')");
		echo 1;
	}
	else
	{
		echo 0;
	}
	
	$Otimizar = $SQL -> Atualizar("OPTIMIZE TABLE laudos_ml_h_hemograma_equino");
	
}
?>