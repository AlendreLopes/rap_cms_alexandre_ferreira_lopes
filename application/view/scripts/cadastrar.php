<?php

$Exame   = $SQL -> Consultar("SELECT * FROM protocolos WHERE protocolo_id = '$indice'");

$Exames  = mysql_fetch_array($Exame);

$Implode = Functions::retorna_data('-','/',$Exames[_data]);

?>
<!DOCTYPE html>

<html>

<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	
	<title>Cadastro de Exames</title>
	
	<script type="text/javascript" src="/library/plugins/portal_laudos/jquery_exames_cadastrar.js"></script>
	
	<style type="text/css">
	table{
		margin      :0 auto;
		width       :712px;
		text-align  :left;
		font-family :arial;
		font-size   :8pt;
		font-weight :bold;
	}
	#cancelar_cadastro{
		margin      :0 auto;
		padding     :0 2px 0 2px;
		width       :70px;
		cursor      :pointer;
		color       :#000;
		font-weight :bold;
		text-align  :center;
		background  :#FFCCCC;
		border      :1px dotted #abdfbf;
	}
	#cancelar_cadastro:hover{
		background:#000;
		color     :#fff;
	}
	</style>
	
</head>

<body>

<span id="indice" indice="<?php echo $indice;?>"></span>

<table cellspacing="0">

<tbody>
	
	<tr>
	<td width="100">Protocolo:</td>
	<td width="200"><strong><?php echo $Exames[_protocolo];?></strong></td>
	<td width="100">&nbsp;</td>
	<td width="100">Solicita&ccedil;&atilde;o:</td>
	<td width="200"><?php echo $Implode;?></td>
	</tr>
	
	<tr>
	  <td>Paciente:</td>
	  <td><?php echo $Exames[_paciente];?></td>
	  <td>&nbsp;</td>
	  <td>Idade:</td>
	  <td><?php echo $Exames[_idade];?></td>
    </tr>
	<tr>
	<td>Esp&eacute;cie:</td>
	<td><?php echo $Exames[_especie];?></td>
	<td><div id="cancelar_cadastro" title="[ Voltar para Listagem de Protocolos ]">[ Voltar ]</div></td>
	<td>Sexo:</td>
	<td><?php echo $Exames[_genero];?></td>
	</tr>
	
	<tr>
	<td>Ra&ccedil;a:</td>
	<td><?php echo $Exames[_raca];?></td>
	<td>&nbsp;</td>
	<td>Propriet&aacute;rio:</td>
	<td><?php echo $Exames[_proprietario];?></td>
	</tr>
	
	<tr>
	  <td>Cl&iacute;nica:</td>
	  <td><?php echo $Exames[_clinica_titulo];?></td>
	  <td>&nbsp;</td>
	  <td>Dr(a).:</td>
	  <td><?php echo $Exames[_requisitante];?></td>
    </tr>
    
  </tbody>

</table>

<div id="quadro_de_cadastro">

<?php

	$cadastar_p = $SQL -> Consultar("SELECT * FROM tb_menu_primario WHERE primario_pagina = '$laudo'");
	$cadastar_ps= mysql_num_rows($cadastar_p);
	
	$cadastar_s = $SQL -> Consultar("SELECT * FROM tb_menu_secundario WHERE secundario_pagina = '$laudo'");
	$cadastar_ss= mysql_num_rows($cadastar_s);
	
	if($cadastar_ps)
	{
		$list = mysql_fetch_array($cadastar_p);
		$caminho = "application/view/scripts/acessar_formularios/{$list[primario_pasta]}/". $laudo . $extencao;
	}
	else if($cadastar_ss)
	{
		$list = mysql_fetch_array($cadastar_s);
		$caminho = "application/view/scripts/acessar_formularios/{$list[secundario_pasta]}/{$list[secundario_subpasta]}/". $laudo . $extencao;
	}
	
	sleep(1);
	
	if(file_exists($caminho))
	{
		include_once($caminho);
	}
	else
	{
		include_once($error);
	}
	
?>

</div>

<br clear="all" />

</body>

</html>