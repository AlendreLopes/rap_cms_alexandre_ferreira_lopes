<!DOCTYPE html>

<html>

<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	
	<title>proteina_creatinina</title>
	
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

$Laudo  = $SQL -> Consultar("SELECT * FROM protocolos, laudos_ml_u_proteina_creatinina WHERE protocolo_id = '$indice' AND _laudo = '$indice'");

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
		
		J&aacute; cadastrado nos Laudos de Proteina : Creatinina.
	
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
    
    <legend>Laudo de Rela&ccedil;&atilde;o Prote&iacute;na : Creatinina</legend>
	
	<form id="formulario" action="/application/models/medicina_laboratorial/urinalise/proteina_creatinina_cadastrar.php" method="post">
	
    <input type="hidden" name="laudo" value="<?php echo $indice;?>" />
    
	<label>
	
	Prote&iacute;na
	
	<input type="text" name="c_2" />
	
	</label>
	
	<label>
	
	Creatinina
	
	<input type="text" name="c_3" />
	
	</label>
	
	<label class="linha">
	
	Rela&ccedil;&atilde;o
	
	<input type="text" name="c_4" />
	
	</label>
	
	<label class="mensagem">
	
	Observa&ccedil;&atilde;o
	
	<textarea name="c_5"></textarea>
	
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