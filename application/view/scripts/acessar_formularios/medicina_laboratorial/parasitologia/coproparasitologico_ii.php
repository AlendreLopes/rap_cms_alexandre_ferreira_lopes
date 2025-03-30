<!DOCTYPE html>

<html>

<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	
	<title>Coproparasitologico Eq&uuml;ino</title>
	
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

$Laudo  = $SQL -> Consultar("SELECT * FROM protocolos, laudos_ml_p_coproparasitologico_ii WHERE protocolo_id = '$indice' AND _laudo = '$indice'");

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
		
		J&aacute; cadastrado nos Laudos de Coproparasitologico Eq&uuml;ino.
	
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
	
	<legend>Laudo de Coproparitologico Eq&uuml;ino</legend>
	
	<form id="formulario" action="/application/models/medicina_laboratorial/parasitologia/coproparasitologico_ii_cadastrar.php" method="post">
	
    <input type="hidden" name="laudo" value="<?php echo $indice;?>" />
    
	<label>
	
	<em>Cyathostomum sp.</em> Positivo
	
	<input type="checkbox" name="c_2" value="Positivo" style="float:left;" />
	
	</label>
	
	<label>
	
	<em>Habronema sp.</em> Positivo
	
	<input type="checkbox" name="c_3" value="Positivo" style="float:left;" />
	
	</label>
	
	<label>
	
	<em>Oxyuris sp.</em> Positivo
	
	<input type="checkbox" name="c_4" value="Positivo" style="float:left;" />
	
	</label>
	
	<label>
	
	<em>Parascaris equorum</em> Positivo
	
	<input type="checkbox" name="c_5" value="Positivo" style="float:left;" />
	
	</label>
	
	<label>
	
	<em>Strongyloides sp.</em> Positivo
	
	<input type="checkbox" name="c_6" value="Positivo" style="float:left;" />
	
	</label>
	
	<label>
	
	<em>Strongylus sp.</em> Positivo
	
	<input type="checkbox" name="c_7" value="Positivo" style="float:left;" />

	
	</label>
	
	<label class="linha">
	
	<em>Candida sp.</em> Positivo
	
	<input type="checkbox" name="c_8" value="Positivo" style="float:left;" />
	
	</label>
	
	<label>
	
	Em branco
	
	<input type="text" name="c_9" />
	
	</label>
	
	<label>
	
	Em branco Resultado
	
	<input type="text" name="c_9_1" />
	
	</label>
	
	<label class="mensagem">
	
	Outros
	
	<textarea name="c_10"></textarea>
	
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