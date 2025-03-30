<!DOCTYPE html>

<html>

<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	
	<title>Leptospirose</title>
	
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

$Laudo  = $SQL -> Consultar("SELECT * FROM protocolos, laudos_ml_i_leptospirose WHERE protocolo_id = '$indice' AND _laudo = '$indice'");

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
		
		J&aacute; cadastrado nos Laudos de Leptospirose.
	
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
	
	<legend>Laudo de Leptospirose</legend>
	
	<form id="formulario" action="/application/models/medicina_laboratorial/imunologia/leptospirose_cadastrar.php" method="post">
	
    <input type="hidden" name="laudo" value="<?php echo $indice;?>" />
	
	<label class="mensagem">
	
	Resultado
	
	<textarea name="c_2">NEGATIVO

Persistindo os sinais cl&iacute;nicos da doen&ccedil;a, colher nova amostra ap&oacute;s 05 dias.

REAGENTE para L. copenhageni 1: 25

Obs: Esta titula&ccedil;&atilde;o &eacute; compat&iacute;vel com rea&ccedil;&atilde;o vacinal ou inicio de infec&ccedil;&atilde;o, colher nova amostra ap&oacute;s 3 dias.

REAGENTE para L. copenhageni 1: 50

Obs: Esta titula&ccedil;&atilde;o &eacute; compat&iacute;vel com inicio de infec&ccedil;&atilde;o, colher nova amostra ap&oacute;s 3 dias.

REAGENTE 
L. icterohaemorrhagiae 1: 400
L. canicola 1 : 400
</textarea>
	</label>
	
	<label class="mensagem">
	
	Observa&ccedil;&atilde;o
	
	<textarea name="c_3"></textarea>
	
	</label>
    
    <label class="linha"><div id="resultado"></div></label>
	
	<label class="cadastrar">
	
	<input type="button" id="cadastrar" class="linha" value="Cadastrar" />
	&nbsp;&nbsp;
	<input type="button" id="cancelar_formulario" value="Cancelar"  />
	
	</label>
	
	</form>
	
	</fieldset>
	
	<?php
}
?>

</body>

</html>