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
	
	$c_19_1 = !empty($_POST["c_19_1"]) ? Functions::seg_($_POST["c_19_1"]) : "Meketrefe";
	
	$c_19_2 = !empty($_POST["c_19_2"]) ? Functions::seg_($_POST["c_19_2"]) : "Meketrefe";
	
	$c_19_3 = !empty($_POST["c_19_3"]) ? Functions::seg_($_POST["c_19_3"]) : "Meketrefe";
	
	$c_20 = !empty($_POST["c_20"]) ? Functions::seg_($_POST["c_20"]) : "Meketrefe";
	
	$c_21 = !empty($_POST["c_21"]) ? Functions::seg_($_POST["c_21"]) : "Meketrefe";
	
	$c_22 = !empty($_POST["c_22"]) ? Functions::seg_($_POST["c_22"]) : "Meketrefe";
	
	$c_23 = !empty($_POST["c_23"]) ? Functions::seg_($_POST["c_23"]) : "Meketrefe";
	
	$c_24 = !empty($_POST["c_24"]) ? Functions::seg_($_POST["c_24"]) : "Meketrefe";
	
	$c_25 = !empty($_POST["c_25"]) ? Functions::seg_($_POST["c_25"]) : "Meketrefe";
	
	$c_26 = !empty($_POST["c_26"]) ? Functions::seg_($_POST["c_26"]) : "Meketrefe";
	
	$c_27 = !empty($_POST["c_27"]) ? Functions::seg_($_POST["c_27"]) : "Meketrefe";
	
	$c_28 = !empty($_POST["c_28"]) ? Functions::seg_($_POST["c_28"]) : "Meketrefe";
	
	$c_29 = !empty($_POST["c_29"]) ? Functions::seg_($_POST["c_29"]) : "Meketrefe";
	
	$c_30 = !empty($_POST["c_30"]) ? Functions::seg_($_POST["c_30"]) : "Meketrefe";
	
	$c_31 = !empty($_POST["c_31"]) ? Functions::seg_($_POST["c_31"]) : "Meketrefe";
	
	$c_32 = !empty($_POST["c_32"]) ? Functions::seg_($_POST["c_32"]) : "Meketrefe";
	
	$c_33 = !empty($_POST["c_33"]) ? Functions::seg_($_POST["c_33"]) : "Meketrefe";
	
	$c_34 = !empty($_POST["c_34"]) ? Functions::seg_($_POST["c_34"]) : "Meketrefe";
	
	$c_35 = !empty($_POST["c_35"]) ? Functions::seg_($_POST["c_35"]) : "Meketrefe";
	
	$c_36 = !empty($_POST["c_36"]) ? Functions::seg_($_POST["c_36"]) : "Meketrefe";
	
	$c_37 = !empty($_POST["c_37"]) ? Functions::seg_($_POST["c_37"]) : "Meketrefe";

	$c_38 = !empty($_POST["c_38"]) ? Functions::seg_($_POST["c_38"]) : "Meketrefe";
	
	$c_39 = !empty($_POST["c_39"]) ? Functions::seg_($_POST["c_39"]) : "Meketrefe";
	
	$c_40 = !empty($_POST["c_40"]) ? Functions::seg_($_POST["c_40"]) : "Meketrefe";
	
	$c_41 = !empty($_POST["c_41"]) ? Functions::seg_($_POST["c_41"]) : "Meketrefe";
	
	$c_42 = !empty($_POST["c_42"]) ? Functions::seg_($_POST["c_42"]) : "Meketrefe";
	
	$c_43 = !empty($_POST["c_43"]) ? Functions::seg_($_POST["c_43"]) : "Meketrefe";
	
	$c_44 = !empty($_POST["c_44"]) ? Functions::seg_($_POST["c_44"]) : "Meketrefe";

	$c_45 = !empty($_POST["c_45"]) ? Functions::seg_($_POST["c_45"]) : "Meketrefe";
	
	$c_46 = !empty($_POST["c_46"]) ? Functions::seg_($_POST["c_46"]) : "Meketrefe";
	
	$c_47 = !empty($_POST["c_47"]) ? Functions::seg_($_POST["c_47"]) : "Meketrefe";
	
	$c_48 = !empty($_POST["c_48"]) ? Functions::seg_($_POST["c_48"]) : "Meketrefe";
	
	$c_49 = !empty($_POST["c_49"]) ? Functions::seg_($_POST["c_49"]) : "Meketrefe";
	
	$c_50 = !empty($_POST["c_50"]) ? Functions::seg_($_POST["c_50"]) : "Meketrefe";
	
	$c_51 = !empty($_POST["c_51"]) ? Functions::seg_($_POST["c_51"]) : "Meketrefe";
	
	$c_52 = !empty($_POST["c_52"]) ? Functions::seg_($_POST["c_52"]) : "Meketrefe";
	
	$c_53 = !empty($_POST["c_53"]) ? Functions::seg_($_POST["c_53"]) : "Meketrefe";
	
	$c_54 = !empty($_POST["c_54"]) ? Functions::seg_($_POST["c_54"]) : "Meketrefe";
	
	$c_54_1 = !empty($_POST["c_54_1"]) ? Functions::seg_($_POST["c_54_1"]) : "Meketrefe";
	
	$c_55 = !empty($_POST["c_55"]) ? Functions::seg_($_POST["c_55"]) : "Meketrefe";
	
	$c_56 = !empty($_POST["c_56"]) ? Functions::seg_($_POST["c_56"]) : "Meketrefe";
	
	$c_57 = !empty($_POST["c_57"]) ? Functions::seg_($_POST["c_57"]) : "Meketrefe";
	
	$c_58 = !empty($_POST["c_58"]) ? Functions::seg_($_POST["c_58"]) : "Meketrefe";
	
	$c_58_1 = !empty($_POST["c_58_1"]) ? Functions::seg_($_POST["c_58_1"]) : "Meketrefe";
	
	$c_59 = !empty($_POST["c_59"]) ? Functions::seg_($_POST["c_59"]) : "Meketrefe";
	
	$c_60 = !empty($_POST["c_60"]) ? Functions::seg_($_POST["c_60"]) : "Meketrefe";
	
	$c_61 = !empty($_POST["c_61"]) ? Functions::seg_($_POST["c_61"]) : "Meketrefe";
	
	$c_62 = !empty($_POST["c_62"]) ? Functions::seg_($_POST["c_62"]) : "Meketrefe";
	
	$c_63 = !empty($_POST["c_63"]) ? Functions::seg_($_POST["c_63"]) : "Meketrefe";
	
	$c_64 = !empty($_POST["c_64"]) ? Functions::seg_($_POST["c_64"]) : "Meketrefe";
	
	$c_65 = !empty($_POST["c_65"]) ? Functions::seg_($_POST["c_65"]) : "Meketrefe"; // Amonia M
	
	$c_66 = !empty($_POST["c_66"]) ? Functions::seg_($_POST["c_66"]) : "Meketrefe"; // Amonia R
	
	$c_67 = !empty($_POST["c_67"]) ? Functions::seg_($_POST["c_67"]) : "Meketrefe"; // Amonia C
	
	$c_68 = !empty($_POST["c_68"]) ? Functions::seg_($_POST["c_68"]) : "Meketrefe"; // Amonia F
	
	$c_69 = !empty($_POST["c_69"]) ? Functions::seg_($_POST["c_69"]) : "Meketrefe"; // Cloro
	
	$c_70 = !empty($_POST["c_70"]) ? Functions::seg_($_POST["c_70"]) : "Meketrefe"; // Ferro
	
	$Resultado = $SQL -> Inserir("INSERT INTO laudos_ml_bioquimica
	(
		_laudo,
		_albumina,
		_albumina_a,
		_tgp,
		_tgp_a,
		_amilase,
		_amilase_a,
		_tgo,
		_tgo_a,
		_bilirrubina_total,
		_bilirrubina_total_a,
		_bilirrubina_direta,
		_bilirrubina_direta_a,
		_bilirrubina_indireta,
		_bilirrubina_indireta_a,
		_calcio,
		_calcio_a,
		_colesterol,
		_colesterol_a,
		_colesterol_hdl,
		_colesterol_ldl,
		_colesterol_vldl,
		_creatina_q,
		_creatina_q_a,
		_creatinina,
		_creatinina_a,
		_fosfatase_a,
		_fosfatase_a_a,
		_fosforo,
		_fosforo_v,
		_fosforo_a,
		_fosforo_m,
		_frutosamina,
		_frutosamina_v,
		_frutosamina_a,
		_frutosamina_m,
		_gama_g,
		_gama_g_a,
		_glicose,
		_glicose_a,
		_globulinas,
		_globulinas_a,
		_globulinas_m,
		_hemoglobina,
		_hemoglobina_a,
		_ldh,
		_ldh_v,
		_ldh_a,
		_lipase,
		_lipase_a,
		_magnesio,
		_magnesio_v,
		_magnesio_a,
		_magnesio_m,
		_potassio,
		_potassio_v,
		_potassio_a,
		_potassio_m,
		_proteina_total,
		_proteina_total_a,
		_sodio,
		_sodio_a,
		_sodio_m,
		_triglicerideos,
		_triglicerideos_a,
		_ureia,
		_ureia_a,
		_outros,
		_observacao,
		_amonia_m,
		_amonia_r,
		_amonia_c,
		_amonia_f,
		_cloro,
		_ferro,
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
		'$c_20',
		'$c_21',
		'$c_22',
		'$c_23',
		'$c_24',
		'$c_25',
		'$c_26',
		'$c_27',
		'$c_28',
		'$c_29',
		'$c_30',
		'$c_31',
		'$c_32',
		'$c_33',
		'$c_34',
		'$c_35',
		'$c_36',
		'$c_37',
		'$c_38',
		'$c_39',
		'$c_40',
		'$c_41',
		'$c_42',
		'$c_43',
		'$c_44',
		'$c_45',
		'$c_46',
		'$c_47',
		'$c_48',
		'$c_49',
		'$c_50',
		'$c_51',
		'$c_52',
		'$c_53',
		'$c_54',
		'$c_54_1',
		'$c_55',
		'$c_56',
		'$c_57',
		'$c_58',
		'$c_58_1',
		'$c_59',
		'$c_60',
		'$c_61',
		'$c_62',
		'$c_63',
		'$c_64',
		'$c_65',
		'$c_66',
		'$c_67',
		'$c_68',
		'$c_69',
		'$c_70',
		NOW()
	)");
	
	sleep(1);
	
	if($Resultado)
	{
		$L_1 = $_SERVER['REMOTE_ADDR'];
		$L_2 = $_COOKIE['sl_hash'];
		$L_3 = "cadastrar";
		$L_4 = "Aзгo Cadastrar Laudo Bioquнmica Protocolo: $c_0";
		$L_5 = $SQL -> Inserir("INSERT INTO tb_log (_ip,_data,_usuario,_acao,_texto) VALUES ('$L_1',NOW(),'$L_2','$L_3','$L_4')");
		echo 1;
	}
	else
	{
		echo 0;
	}
	
	$Otimizar = $SQL -> Atualizar("OPTIMIZE TABLE laudos_ml_bioquimica");
	
}
?>