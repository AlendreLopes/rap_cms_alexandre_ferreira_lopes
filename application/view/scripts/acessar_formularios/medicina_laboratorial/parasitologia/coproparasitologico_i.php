<!DOCTYPE html>

<html>

<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	
	<title>Coproparasitologico</title>
	
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

$Laudo  = $SQL -> Consultar("SELECT * FROM protocolos, laudos_ml_p_coproparasitologico_i WHERE protocolo_id = '$indice' AND _laudo = '$indice'");

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
		
		J&aacute; cadastrado nos Laudos de Coproparasitologico.
	
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
	
	<legend>Laudo de Coproparitologico</legend>
	
	<form id="formulario" action="/application/models/medicina_laboratorial/parasitologia/coproparasitologico_i_cadastrar.php" method="post">
	
    <input type="hidden" name="laudo" value="<?php echo $indice;?>" />
    
	<label>
	
	<input type="checkbox" name="c_2" value="Positivo" style="float:left;" />
	
	Ancylostoma Positivo
	
	</label>
	
	<label>
	
	Dipilydium Positivo
	
	<input type="checkbox" name="c_3" value="Positivo" style="float:left;" />
	
	</label>
	
	<label>
	
	Toxocara Positivo
	
	<input type="checkbox" name="c_4" value="Positivo" style="float:left;" />
	
	</label>
	
	<label>
	
	Trichuris Positivo
	
	<input type="checkbox" name="c_5" value="Positivo" style="float:left;" />
	
	</label>
	
	<label>
	
	Eimeria Positivo
	
	<input type="checkbox" name="c_6" value="Positivo" style="float:left;" />
	
	</label>
	
	<label>
	
	Isospora Positivo
	
	<input type="checkbox" name="c_7" value="Positivo" style="float:left;" />

	
	</label>
	
	<label>
	
	Toxoplasma Positivo
	
	<input type="checkbox" name="c_8" value="Positivo" style="float:left;" />
	
	</label>
	
	<label>
	
	Giardia Positivo
	
	<input type="checkbox" name="c_9" value="Positivo" style="float:left;" />
	
	</label>
	
	<label class="mensagem">
	
	Outros
	
	<textarea name="c_10"></textarea>
	
	</label>
	
	<label class="mensagem">
	
	Observa&ccedil;&atilde;o
	
	<textarea name="c_11"></textarea>
	
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