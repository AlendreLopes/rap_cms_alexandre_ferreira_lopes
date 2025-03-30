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
	
	$c_2 = !empty($_POST["c_2"]) ? Functions::seg_($_POST["c_2"]) : 'Meketrefe';
	
	$Resultado = $SQL -> Inserir("INSERT INTO laudos_di_us_exploratoria
	(
		_laudo,
		_descricao,
		_concluido
	) 
	VALUES 
	(
		'$c_0',
		'$c_2',
		NOW()
	)");
	
	sleep(1);
	
	if($Resultado)
	{
		$L_1 = $_SERVER['REMOTE_ADDR'];
		$L_2 = $_COOKIE['sl_hash'];
		$L_3 = "cadastrar";
		$L_4 = "Ação Cadastrar Laudo US Exploratória Protocolo: $c_0";
		$L_5 = $SQL -> Inserir("INSERT INTO tb_log (_ip,_data,_usuario,_acao,_texto) VALUES ('$L_1',NOW(),'$L_2','$L_3','$L_4')");
		echo 1;
	}
	else
	{
		echo 0;
	}
	
	$Otimizar = $SQL -> Atualizar("OPTIMIZE TABLE laudos_di_us_exploratoria");
	
}

?>