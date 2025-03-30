<!DOCTYPE html>

<html>

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	
	<title>US Obst&eacute;trica</title>
	
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

$Laudo  = $SQL -> Consultar("SELECT * FROM protocolos, laudos_di_us_obstetrica WHERE protocolo_id = '$indice' AND _laudo = '$indice'");

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
		
		J&aacute; cadastrado nos Laudos de US Obst&eacute;trica.
	
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
	
	<legend>Laudo de US Obst&eacute;trica</legend>
	
	<form id="formulario" action="/application/models/diagnosticos_por_imagens/us_obstetrica_cadastrar.php" method="post">
	
    <input type="hidden" name="laudo" value="<?php echo $indice;?>" />
    
	<label class="mensagem">
	
	Descri&ccedil;&atilde;o:
	
	<textarea name="c_2">BIOMETRIA FETAL:
Di&acirc;metro biparietal (cr&acirc;nio)=  cm.
Di&acirc;metro tor&aacute;cico           =  cm.
Di&acirc;metro abdominal          =  cm.
Comprimento fetal           =  cm.

Batimentos card&iacute;acos presentes e r&iacute;tmicos &ndash; aproximadamente  bat/min.

Placenta com aspecto homogêneo e espessura dentro da normalidade (cm).

L&iacute;quido amni&oacute;tico com apar&ecirc;ncia e volume adequado para a fase.

Sistema &oacute;sseo articular em desenvolvimento, produzindo t&ecirc;nue sombra ac&uacute;stica posterior.

No abd&ocirc;men fetal &eacute; poss&iacute;vel a individualiza&ccedil;&atilde;o de: est&ocirc;mago, rins, f&iacute;gado, bexiga e al&ccedil;as intestinais.

Apesar da pouca precis&atilde;o do m&eacute;todo na quantifica&ccedil;&atilde;o fetal, estimam-se a presen&ccedil;a de fetos, com bom desenvolvimento, movimenta&ccedil;&atilde;o e dimens&otilde;es semelhantes.

Sinais ultra-sonogr&aacute;ficos compat&iacute;veis com gesta&ccedil;&atilde;o de aproximadamente  a  dias.
</textarea>
	
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