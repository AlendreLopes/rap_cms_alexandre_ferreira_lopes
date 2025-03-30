<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<script type="text/javascript">
function fechar(){
	// window.location.reload()
	// Retorna o caminho da URL
	// location.pathname;
	// Retorna toda URL
	// location.href;
	var url_ = location.href;
	window.location = url_;
}
</script>
</head>

<body>

<?php

if($_SERVER['REQUEST_METHOD'] == "POST")
{
	
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
	// t_t   = titulo_tabela
	// c_t   = celula_titulo
	// c_t_v = celulo_titulo_valor
	// c_i   = celula_id
	// c_i_v = celula_id_valor
	// c_i_v = celula_id_protocolo
	$t_t   = Functions::seg_($_POST["t_t"]);
	$c_t   = Functions::seg_($_POST["c_t"]);
	$c_t_v = Functions::seg_($_POST["c_t_v"]);
	$c_i   = Functions::seg_($_POST["c_i"]);
	$c_i_v = Functions::seg_($_POST["c_i_v"]);
	$c_i_p = Functions::seg_($_POST["c_i_p"]);
	
	if($c_t == "excluir")
	{
		$h = $_COOKIE['sl_hash'];
		$u = $SQL -> Consultar("SELECT * FROM tb_usuarios WHERE usuario_email_hash = '$h'");
		$us= mysql_fetch_array($u);
		if($us[usuario_permissao] == "s")
		{
			// Exclui Laudo
			$e  = $SQL -> Deletar("DELETE FROM $t_t WHERE $c_i = '$c_i_v'");
			if($c_t_v == "775")
			{
				
				$L_1 = $_SERVER['REMOTE_ADDR'];
				$L_2 = $_COOKIE['sl_hash'];
				$L_3 = "excluir";
				$L_4 = "A��o Excluir Laudo da Tabela: $t_t e Indice: $c_i_v";
				$L_5 = $SQL -> Inserir("INSERT INTO tb_log (_ip,_data,_usuario,_acao,_texto) VALUES ('$L_1',NOW(),'$L_2','$L_3','$L_4')");
				
				echo  "RECARREGANDO A P&Aacute;GINA";
				sleep(2);
				echo "<script>fechar();</script>";
			}
			else
			{
				$i  = $SQL -> Consultar("SELECT * FROM tb_imagens WHERE imagem_{$c_t_v} = $c_i_v");
				$ir = mysql_num_rows($i);
				if($ir)
				{
					while($is = mysql_fetch_array($i))
					{
						$x = unlink("../../../public/images_e/{$is[imagem_imagem]}");
						if($x)
						{
							$i_x = $SQL -> Deletar("DELETE FROM tb_imagens WHERE imagem_id = {$is[imagem_id]}");
						}
					}
				
					$L_1 = $_SERVER['REMOTE_ADDR'];
					$L_2 = $_COOKIE['sl_hash'];
					$L_3 = "excluir";
					$L_4 = "A��o Excluir Laudo da Tabela: $t_t e Indice: $c_i_v";
					$L_5 = $SQL -> Inserir("INSERT INTO tb_log (_ip,_data,_usuario,_acao,_texto) VALUES ('$L_1',NOW(),'$L_2','$L_3','$L_4')");
					
					echo  "RECARREGANDO A P&Aacute;GINA";
					sleep(2);
					echo "<script>fechar();</script>";
				}
				
				$L_1 = $_SERVER['REMOTE_ADDR'];
				$L_2 = $_COOKIE['sl_hash'];
				$L_3 = "excluir";
				$L_4 = "A��o Excluir Laudo da Tabela: $t_t e Indice: $c_i_v";
				$L_5 = $SQL -> Inserir("INSERT INTO tb_log (_ip,_data,_usuario,_acao,_texto) VALUES ('$L_1',NOW(),'$L_2','$L_3','$L_4')");
				
				echo  "RECARREGANDO A P&Aacute;GINA";
				sleep(2);
				echo "<script>fechar();</script>";
			}
		}
		else
		{
			echo  "SEM PERMISS&Atilde;O DE EXCLUSS&Atilde;O";
			sleep(2);
			echo "<script>fechar();</script>";
		}
	}
	else if($c_t == "excluir_imagem")
	{
		$h = $_COOKIE['sl_hash'];
		$u = $SQL -> Consultar("SELECT * FROM tb_usuarios WHERE usuario_email_hash = '$h'");
		$us= mysql_fetch_array($u);
		if($us[usuario_permissao] == "s")
		{
			// Imagens
				$imagens  = $SQL -> Consultar("SELECT * FROM tb_imagens WHERE imagem_id = '$c_i_v'");
				// Imagens Selecionar
				$listar   = mysql_fetch_array($imagens);
				// Imagem Deletar
				$deletado = unlink("../../../public/images_e/{$listar[imagem_imagem]}");
				// Se Imagem Deletada cadastra a nova Imagem
				if($deletado)
				{
					$x   = $SQL -> Deletar("DELETE FROM tb_imagens WHERE imagem_id = '$c_i_v'");
					$L_1 = $_SERVER['REMOTE_ADDR'];
					$L_2 = $_COOKIE['sl_hash'];
					$L_3 = "excluir";
					$L_4 = "A��o Excluir Imagens Indice: $c_i_v";
					$L_5 = $SQL -> Inserir("INSERT INTO tb_log (_ip,_data,_usuario,_acao,_texto) VALUES ('$L_1',NOW(),'$L_2','$L_3','$L_4')");
					echo  "IMAGEM EXCLUIDA COM SUCESSO";
					echo  "<br />";
					echo  "RECARREGANDO P&Aacute;GINA";
					sleep(2);
					echo "<script>fechar();</script>";
				}
				else
				{
					echo  "ERRO AO EXCLUIR IMAGEM";
					sleep(2);
					echo "<script>fechar();</script>";
				}
		}
		else
		{
			echo  "SEM PERMISS&Atilde;O DE EXCLUSS&Atilde;O";
			echo  "<br />";
			echo  "RECARREGANDO P&Aacute;GINA";
			sleep(3);
			echo "<script>fechar();</script>";
		}
	}else if($c_t == "_clinica_titulo"){
		$Clinica  = $SQL -> Consultar("SELECT convenio_titulo AS Titulo FROM tb_convenios WHERE convenio_id = '$c_t_v'");
		$Clinicas = mysql_result($Clinica,0,'Titulo');
		sleep(1);
		$Salva    = $SQL -> Atualizar("UPDATE $t_t SET _clinica_titulo = '$Clinicas', _clinica_id = '$c_t_v' WHERE $c_i = '$c_i_v'");
		sleep(1);
		if($Salva){
			// echo $Clinicas;
			echo "<script>fechar();</script>";
		}
	}else{
		// Limpar texto
		$valor = str_replace('&amp;','&',$c_t_v);
		$valor = (empty($valor)) ? 0 : $valor;
		$Salva = $SQL -> Atualizar("UPDATE $t_t SET $c_t = '$valor' WHERE $c_i = '$c_i_v'");
		if($Salva){
			sleep(2);
			echo nl2br($valor);
		}
	}
}
?>
</body>
</html>