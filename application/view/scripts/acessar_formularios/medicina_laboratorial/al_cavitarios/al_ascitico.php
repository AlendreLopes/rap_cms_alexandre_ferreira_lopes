<!DOCTYPE html>

<html>

<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	
	<title>AL Ascitico</title>
	
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

$Laudo  = $SQL -> Consultar("SELECT * FROM protocolos, laudos_ml_al_ascitico WHERE protocolo_id = '$indice' AND _laudo = '$indice'");

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
		
		J&aacute; cadastrado nos Laudos de AL Ascitico.
	
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
	
	<legend>Laudo de AL Ascitico</legend>
	
	<form id="formulario" action="/application/models/medicina_laboratorial/al_cavitarios/al_ascitico_cadastrar.php" method="post">
	
    <input type="hidden" name="laudo" value="<?php echo $indice;?>" />
    
    <label class="linha">
    
    <strong>Exame F&iacute;sico</strong>
    
    </label>
    
	<label>
	
	<strong>Volume</strong>
	
	<input type="text" name="c_2" />
	
	</label>
	
	<label>
	
	<strong>Cor</strong>
	
	<input type="text" name="c_3" />
	
	</label>
	
	<label>
	
	<strong>Aspecto</strong>
	
	<input type="text" name="c_4" />
	
	</label>
	
	<label>
	
	<strong>Odor</strong>
	
	<input type="text" name="c_5" />
	
	</label>
	
	<label>
	
	<strong>Densidade</strong>
	
	<input type="text" name="c_6" />
	
	</label>
	
	<label>
	
	<strong>Sedimento</strong>
	
	<input type="text" name="c_7" />
	
	</label>
	
	<label>
	
	<strong>Cor do Sobrenadante</strong>
	
    <input type="text" name="c_8" />
	
	</label>
	
    <label class="linha">&nbsp;</label>
    
    <label class="linha">
    
    <strong>Exame Citol&oacute;gico</strong>
    
    </label>
    
	<label>
	
	<strong>C&eacute;lulas N&uacute;cleadas</strong>
	
	<input type="text" name="c_9" />
	
	</label>
	
	<label>
	
	<strong>Eritrocitos</strong>
	
	<input type="text" name="c_10" />
	
	</label>
	
	<label class="mensagem">
	
	<strong>Contagem Diferencial</strong>
	
	<textarea name="c_11"></textarea>
	
	</label>
	
    <label class="linha">&nbsp;</label>
    
    <label class="linha">
    
    <strong>Exame Qu&iacute;mico</strong>
    
    </label>
    
	<label>
	
	<strong>Glicose</strong>
	
	<input type="text" name="c_12" />
	
	</label>
	
	<label>
	
	<strong>Ph</strong>
	
	<input type="text" name="c_13" />
	
	</label>
	
	<label>
	
	<strong>Prote&iacute;nas</strong>
	
	<input type="text" name="c_14" />
	
	</label>
	
	<label>
	
	<strong>Sangue Oculto</strong>
	
	<input type="text" name="c_15" />
	
	</label>
	
	<label>
	
	<strong>Co&aacute;gulo</strong>
	
	<input type="text" name="c_16" />
	
	</label>
	
	<label>
	
	<strong>Amilase</strong>
	
	<input type="text" name="c_17" />
	
	</label>
	
    <label class="linha">&nbsp;</label>
    
	<label class="mensagem">
	
	<strong>Observa&ccedil;&atilde;o</strong>
	
	<textarea name="c_18"></textarea>
	
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