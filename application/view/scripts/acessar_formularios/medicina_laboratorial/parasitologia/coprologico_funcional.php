<!DOCTYPE html>

<html>

<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	
	<title>Coprol&oacute;gico</title>
	
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

$Laudo  = $SQL -> Consultar("SELECT * FROM protocolos, laudos_ml_p_coprologico WHERE protocolo_id = '$indice' AND _laudo = '$indice'");

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
		
		J&aacute; cadastrado nos Laudos de Coprol&oacute;gico Funcional.
	
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
	
	<legend>Laudo de Coprol&oacute;gico Funcional</legend>
	
	<form id="formulario" action="/application/models/medicina_laboratorial/parasitologia/coprologico_funcional_cadastrar.php" method="post">
	
    <input type="hidden" name="laudo" value="<?php echo $indice;?>" />
    
	<label class="linha">
	
	Tripsina Positivo
	
    <input type="checkbox" name="c_2" value="Positivo" />
        
    </label>
	
	<label>
	
	Fibras
	
	<input type="text" name="c_3" value="+" />
	
	</label>
	
	<label>
	
	Amido
	
	<input type="text" name="c_4" value="+" />
	
	</label>
	
	<label>
	
	Sangue Oculto
	
	<input type="text" name="c_5" value="negativo" />
	
	</label>
	
	<label>
	
	Gorgura Fecal
	
	<input type="text" name="c_6" value="negativo" />
	
	</label>
	
	<label class="mensagem">
	
	Observa&ccedil;&atilde;o
	
	<textarea name="c_7" style="text-align:justify;">Fezes formadas e colora&ccedil;&atilde;o castanho m&eacute;io.
Presen&ccedil;a de muco macroscopicamente.
Presen&ccedil;a de pequena quantidade de gr&acirc;nulos de amido n&atilde;o digeridos.
Fibras vegetais em moderada quantidade.
Observa&ccedil;&atilde;o de fibras musculares dentro dos limites aceit&aacute;veis para a esp&eacute;cie.
Aus&ecirc;ncia de sangue oculto e got&iacute;culas de gordura.
Presen&ccedil;a de fungos do g&ecirc;ero C&acirc;ndida sp. (+).</textarea>
	
	</label>
    
	<label class="mensagem">
	
	Resultado
	
	<textarea name="c_8" style="text-align:justify;">Amostra fecal com par&acirc;metros normais quanto a digest&atilde;o e absor&ccedil;&atilde;o intestinal. Prov&aacute;vel aus&ecirc;ncia de insufici&ecirc;ncia pancre&aacute;tica ex&oacute;crina.</textarea>
	
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