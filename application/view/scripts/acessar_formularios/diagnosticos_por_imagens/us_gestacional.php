<!DOCTYPE html>

<html>

<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	
	<title>US Gestacional</title>
	
	<script type="text/javascript" src="/library/plugins/form/jquery_form.js"></script>
	
	<script type="text/javascript" src="/library/plugins/validation/jquery_validate.js"></script>
	
	<script type="text/javascript" src="/library/plugins/portal_laudos/jquery_laudos_cadastrar.js"></script>
	
	<link type="text/css" rel="stylesheet" media="screen" href="/public/styles/sistema_formularios.css" />
	
	<style type="text/css">
		#resultado{ clear:both;}
	</style>
	
</head>

<body>

<?php

$Laudo  = $SQL -> Consultar("SELECT * FROM protocolos, laudos_di_us_gestacional WHERE protocolo_id = '$indice' AND _laudo = '$indice'");

$Laudos = mysql_num_rows($Laudo);

if($Laudos)
{
	$Listar = mysql_fetch_array($Laudo);
	
	?>
	
	<br />
	
	<br />
	
	<fieldset>
	
	<label class="linha">
	
	<strong>
	
		<br />
		
		Protocolo: <?php echo $Listar[_protocolo];?>
		
		<br />
		
		<br />
		
		J&aacute; cadastrado nos Laudos de US Gestacional.
	
	</strong>
	
	</label>
	
	</fieldset>
	
	<?php
}
else
{	
	?>
	
	<span id="cadastrado" visualizar="<?php echo LMPaginas::Listar($laudo.'_visualizar',$indice);?>"></span>
	
	<fieldset>
	
	<legend>Laudo de US Gestacional</legend>
	
	<form id="formulario" action="/application/models/diagnosticos_por_imagens/us_gestacional_cadastrar.php" method="post">
	
    <input type="hidden" name="laudo" value="<?php echo $indice;?>" />
    
	<label class="mensagem">
	
	Descri&ccedil;&atilde;o:
	
	<textarea name="c_2">Presen&ccedil;a de ves&iacute;cula gestacional com apar&ecirc;ncia e ecogenicidade dentro da normalidade.

Presen&ccedil;a de estrutura embrion&aacute;ria com visualiza&ccedil;&atilde;o de atividade card&iacute;aca.

Di&acirc;metro da ves&iacute;cula gestacional:  cm

Tempo de gesta&ccedil;&atilde;o sugerido:  dias
 
N&uacute;mero de ves&iacute;culas gestacionais:</textarea>
	
	</label>
	
	<label class="linha"><div id="resultado"></div></label>
    
	<label class="cadastrar">
	
	<input type="button" id="cadastrar" class="linha" value="Cadastrar" />
	&nbsp;&nbsp;
	<input type="button" id="cancelar_formulario" value="Cancelar"  />
	
	</label>
	
	</form>
	
	</fieldset>
    
	<br />
	<br />
	
	<?php
}
?>

</body>

</html>