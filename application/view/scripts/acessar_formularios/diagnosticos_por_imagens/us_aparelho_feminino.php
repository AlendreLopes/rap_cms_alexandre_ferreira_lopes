<!DOCTYPE html>

<html>

<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	
	<title>US Aparelho Feminino</title>
	
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

$Laudo  = $SQL -> Consultar("SELECT * FROM protocolos, laudos_di_us_aparelho_feminino WHERE protocolo_id = '$indice' AND _laudo = '$indice'");

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
		
		J&aacute; cadastrado nos Laudos de US Aparelho Feminino.
	
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
	
	<legend>Laudo de US Aparelho Feminino</legend>
	
	<form id="formulario" action="/application/models/diagnosticos_por_imagens/us_aparelho_feminino_cadastrar.php" method="post">
	
    <input type="hidden" name="laudo" value="<?php echo $indice;?>" />
    
	<label class="mensagem">
	
	Descri&ccedil;&atilde;o:
	
	<textarea name="c_2">MEDIDAS:
Ov&aacute;rio direito:   cm
Ov&aacute;rio esquerdo:  cm
&Uacute;tero:            cm

Bexiga urin&aacute;ria de reple&ccedil;&atilde;o adequada, paredes finas e ecog&ecirc;nicas, mucosa regular com conte&uacute;do anecog&ecirc;nico dentro dos padr&otilde;es da normalidade.

&Uacute;tero sem evid&ecirc;ncias de distens&atilde;o, paredes finas e ecogênicas com conte&uacute;do ecog&ecirc;nico dentro da normalidade.

Ov&aacute;rio direito com morfologia, contornos e textura normais.

Ov&aacute;rio esquerdo com morfologia, contornos e textura normais.</textarea>
	
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