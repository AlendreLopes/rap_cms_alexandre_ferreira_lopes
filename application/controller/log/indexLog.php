<?php

class Log
{
	
	function Logs($Caminho,$Dados)
	{
		
		$Data    = date('d_m_Y');
		
		$Log     = $Caminho."log_".$Data.".txt";
		
		$Arquivo = fopen($Log,'a');
		
		fwrite($Arquivo,$Dados);
		
		fclose($Arquivo);
		
	}
	
}

?>