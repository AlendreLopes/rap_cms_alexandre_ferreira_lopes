<!DOCTYPE html>

<html>

<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	
	<title>Toxicologico</title>
	
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

$Laudo  = $SQL -> Consultar("SELECT * FROM protocolos, laudos_ml_toxicologico WHERE protocolo_id = '$indice' AND _laudo = '$indice'");

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
		
		J&aacute; cadastrado nos Laudos de Toxicologico.
	
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
	
	<legend>Laudo de Toxicologico</legend>
	
	<form id="formulario" action="/application/models/medicina_laboratorial/toxicologico_cadastrar.php" method="post">
	
    <input type="hidden" name="laudo" value="<?php echo $indice;?>" />
    
    <label class="mensagem">
    
    Amostra
    
    <textarea name="c_2"></textarea>
    
    </label>
    
	<label class="mensagem">
	
	Resultado
	
	<textarea name="c_3">Clorado: n&atilde;o detect&aacute;vel
Fosforado: n&atilde;o detect&aacute;vel
Clorofosforados: n&atilde;o detect&aacute;vel
Cumar&iacute;nico: n&atilde;o detect&aacute;vel
Piretr&oacute;ide: n&atilde;o detect&aacute;vel
Estriquinina: n&atilde;o detect&aacute;vel
Cianeto (t&oacute;xico): n&atilde;o detect&aacute;vel
Chumbo: n&atilde;o detect&aacute;vel
Ars&ecirc;nico: n&atilde;o detect&aacute;vel
Merc&uacute;rio: n&atilde;o detect&aacute;vel 
Carbamatos: n&atilde;o detect&aacute;vel</textarea>
	
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