<!DOCTYPE html>

<html>

<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	
	<title>US Explorat&oacute;ria</title>
	
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

$Laudo  = $SQL -> Consultar("SELECT * FROM protocolos, laudos_di_us_exploratoria WHERE protocolo_id = '$indice' AND _laudo = '$indice'");

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
		
		J&aacute; cadastrado nos Laudos de US Explorat&oacute;ria.
	
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
	
	<legend>Laudo de US Explorat&oacute;ria</legend>
	
	<form id="formulario" action="/application/models/diagnosticos_por_imagens/us_exploratoria_cadastrar.php" method="post">
	
    <input type="hidden" name="laudo" value="<?php echo $indice;?>" />
    
	<label class="mensagem">
	
	Descri&ccedil;&atilde;o:
	
	<textarea name="c_2">F&iacute;gado em topografia habitual, dimens&otilde;es dentro da normalidade, contornos regulares, bordas finas, par&ecirc;nquima homog&ecirc;neo e ecogenicidade mantida. Arquitetura vascular com calibre e trajeto preservados. Ves&iacute;cula biliar repleta por conte&uacute;do anecog&ecirc;nico, com paredes finas.

Ba&ccedil;o em topografia habitual, dimens&otilde;es, contornos, padr&atilde;o e ecogenicidade dentro da normalidade.

Est&ocirc;mago de parede preservada ( cm), com estratifica&ccedil;&atilde;o parietal mantida (nas regi&otilde;es pass&iacute;veis de visibiliza&ccedil;&atilde;o), l&uacute;men com conte&uacute;do gasoso em moderada quantidade. Al&ccedil;as intestinais em topografia habitual, paredes normoespessas ( cm), peristaltismo progressivo, estratifica&ccedil;&atilde;o parietal mantida e l&uacute;men sem altera&ccedil;&otilde;es dignas de nota.

Rim direito de tamanho pr&oacute;ximo a normalidade ( cm), em topografia habitual, contornos regulares, arquitetura e ecogenicidade normais com limite corticomedular preservado.

Rim esquerdo de tamanho pr&oacute;ximo a normalidade ( cm), em topografia habitual, contornos regulares, arquitetura e ecogenicidade normais com limite corticomedular preservado. 

P&acirc;ncreas visibilizado em todos os contornos (corpo, lobo direito e esquerdo), ecog&ecirc;nico, de dimens&otilde;es preservadas. Duodeno de parede normoespessa ( cm) e l&uacute;men sem altera&ccedil;&otilde;es dignas de nota.

Adrenais em topografia habitual, apresentando contornos regulares, ecotextura homog&ecirc;nea, de tamanho preservado (AD: cm; AE: cm). 

Aus&ecirc;ncia de linfonodomegalias. 

Aus&ecirc;ncia de l&iacute;quido livre abdominal.

Bexiga urin&aacute;ria em topografia habitual, reple&ccedil;&atilde;o adequada, paredes normoespessas ( cm) e ecog&ecirc;nicas, mucosa regular e conte&uacute;do anecog&ecirc;nico homog&ecirc;neo.

Pr&oacute;stata em topografia habitual, tamanho dentro da normalidade ( cm), contornos definidos, margens regulares, padr&atilde;o homog&ecirc;neo e ecogenicidade preservada.

Test&iacute;culo direito em bolsa escrotal de tamanho dentro da normalidade ( cm), contornos definidos, margens regulares, padr&atilde;o homog&ecirc;neo e ecogenicidade preservada.

Test&iacute;culo esquerdo em bolsa escrotal de tamanho dentro da normalidade ( cm), contornos definidos, margens regulares, padr&atilde;o homog&ecirc;neo e ecogenicidade preservada.

Ov&aacute;rios e &uacute;tero sem altera&ccedil;&atilde;o ultra-sonogr&aacute;fica digna de nota.

Aorta e veia cava caudal com trajeto e dimens&otilde;es preservados.
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
	
	<?php
}
?>

</body>

</html>