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
	
	$c_2   = !empty($_POST["c_2"])  ? Functions::seg_($_POST["c_2"])  : 'Meketrefe';
	$c_3   = !empty($_POST["c_3"])  ? Functions::seg_($_POST["c_3"])  : 'Meketrefe';
	$c_4   = !empty($_POST["c_4"])  ? Functions::seg_($_POST["c_4"])  : 'Meketrefe';
	$c_5   = !empty($_POST["c_5"])  ? Functions::seg_($_POST["c_5"])  : 'Meketrefe';
	$c_6   = !empty($_POST["c_6"])  ? Functions::seg_($_POST["c_6"])  : 'Meketrefe';
	$c_6_1 = !empty($_POST["c_6_1"])  ? Functions::seg_($_POST["c_6_1"])  : 'Meketrefe';
	$c_7   = !empty($_POST["c_7"])  ? Functions::seg_($_POST["c_7"])  : 'Meketrefe';
	$c_8   = !empty($_POST["c_8"])  ? Functions::seg_($_POST["c_8"])  : 'Meketrefe';
	
	$Resultado = $SQL -> Inserir("INSERT INTO laudos_ml_e_endocrinologia_ria
	(
		_laudo,
		_cortisol,
		_estradiol,
		_insulina,
		_t4_total,
		_t4_livre,
		_t4_livre_dialise,
		_t3_total,
		_tsh,
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
		'$c_6_1',
		'$c_7',
		'$c_8',
		NOW()
	)");
	
	sleep(1);
	
	if($Resultado)
	{
		$L_1 = $_SERVER['REMOTE_ADDR'];
		$L_2 = $_COOKIE['sl_hash'];
		$L_3 = "cadastrar";
		$L_4 = "Aчуo Cadastrar Laudo Endocrinologia RIA Protocolo: $c_0";
		$L_5 = $SQL -> Inserir("INSERT INTO tb_log (_ip,_data,_usuario,_acao,_texto) VALUES ('$L_1',NOW(),'$L_2','$L_3','$L_4')");
		echo 1;
	}
	else
	{
		echo 0;
	}
	
	$Otimizar = $SQL -> Atualizar("OPTIMIZE TABLE laudos_ml_e_endocrinologia_ria");
}

?>