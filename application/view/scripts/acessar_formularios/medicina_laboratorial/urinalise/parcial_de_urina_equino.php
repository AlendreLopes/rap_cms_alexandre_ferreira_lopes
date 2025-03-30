<!DOCTYPE html>

<html>

<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	
	<title>Parcial de Urina Equino</title>
	
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

$Laudo  = $SQL -> Consultar("SELECT * FROM protocolos, laudos_ml_u_parcial_de_urina_equino WHERE protocolo_id = '$indice' AND _laudo = '$indice'");

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
		
		J&aacute; cadastrado nos Laudos de Parcial de Urina Equino.
	
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
	
	<legend>Laudo de Parcial de Urina Equino</legend>
	
	<form id="formulario" action="/application/models/medicina_laboratorial/urinalise/parcial_de_urina_equino_cadastrar.php" method="post">
	
    <input type="hidden" name="laudo" value="<?php echo $indice;?>" />
    
    <label class="linha">&nbsp;</label>
    
    <label class="linha"><strong>Exame F&iacute;sico</strong></label>
    
	<label>
	
	Volume
	
	<input type="text" name="c_2" />
	
	</label>
	
	<label>
	
	Densidade
	
	<input type="text" name="c_3" />
	
	</label>
	
	<label>
	
	Aspecto
	
	<input type="text" name="c_4" />
	
	</label>
	
	<label>
	
	Cor
	
	<input type="text" name="c_5" />
	
	</label>
	
	<label>
	
	Ph
	
	<input type="text" name="c_6" />
	
	</label>
	
    <label class="linha">&nbsp;</label>
    
    <label class="linha"><strong>Exame Qu&iacute;mico</strong></label>
    
	<label>
	
	Proteinas
	
	<input type="text" name="c_7" />
	
	</label>
	
	<label>
	
	Glicose
	
	<input type="text" name="c_8" />
	
	</label>
	
	<label>
	
	 Corpos Cetonicos
	 
	 <input type="text" name="c_9" />
	
	</label>
	
	<label>
	
	Bilirrubina
	
	<input type="text" name="c_10" />
	
	</label>
	
	<label>
	
	Urobilinogenio
	
	<input type="text" name="c_11" />
	
	</label>
	
	<label>
	
	Nitrito
	
	<input type="text" name="c_12" />
	
	</label>
	
	<label>
	
	Sangue
	
	<input type="text" name="c_13" />
	
	</label>
	
    <label class="linha">&nbsp;</label>
    
    <label class="linha"><strong>Exame Microsc&oacute;pico</strong></label>
    
	<label>
	
	Celulas
	
	<input type="text" name="c_14" />
	
	</label>
	
	<label>
	
	Leucocitos
	
	<input type="text" name="c_15" />
	
	</label>
	
	<label>
	
	Hemacias
	
	<input type="text" name="c_16" />
	
	</label>
	
	<label>
	
	Filamentos Muco
	
	<input type="text" name="c_17" />
	
	</label>
	
	<label>
	
	Cilindros
	
	<input type="text" name="c_18" />
	
	</label>
	
	<label>
	
	Cristais
	
	<input type="text" name="c_19" />
	
	</label>
	
    <label class="linha">&nbsp;</label>
    
	<label class="mensagem">
	
	Observa&ccedil;&atilde;o
	
	<textarea name="c_20"></textarea>
	
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