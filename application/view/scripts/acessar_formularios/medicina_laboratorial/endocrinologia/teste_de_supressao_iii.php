<!DOCTYPE html>

<html>

<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	
	<title>Teste de Supress&atilde;o 3 Doses RIA</title>
	
	<script type="text/javascript" src="/library/plugins/form/jquery_form.js"></script>
	
	<script type="text/javascript" src="/library/plugins/validation/jquery_validate.js"></script>
	
	<script type="text/javascript" src="/library/plugins/portal_laudos/jquery_laudos_cadastrar.js"></script>
	
	<link type="text/css" rel="stylesheet" media="screen" href="/public/styles/sistema_formularios.css" />
	
	<style type="text/css">
		#resultado{ clear:both;}
	</style>
	
</head>

<div id="exame_cadastrado"></div>

<body>

<?php

$Laudo  = $SQL -> Consultar("SELECT * FROM protocolos, laudos_ml_e_teste_de_supressao_iii WHERE protocolo_id = '$indice' AND _laudo = '$indice'");

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
		
		J&aacute; cadastrado nos Laudos de Teste de Supress&atilde;o 3 Doses RIA.
	
	</strong>
	
	</label>
	
	<label class="linha"></label>
	
</fieldset>
	
	<?php
}
else
{	
	?>
	
	<span id="cadastrado" visualizar="<?php echo LMPaginas::Listar($laudo.'_visualizar',$indice);?>"></span>
	
	<fieldset>
	
	<legend>Laudo de Teste de Supress&atilde;o 3 Doses RIA</legend>
	
	<form id="formulario" action="/application/models/medicina_laboratorial/endocrinologia/teste_de_supressao_iii_cadastrar.php" method="post">
	
    <input type="hidden" name="laudo" value="<?php echo $indice;?>" />
    
    <label class="linha">
    
    Cortisol Basal
	
    <input name="c_1" type="text" />
    
    </label>
    
    <label>
    
    Cortisol 4 Horas
    
    <input name="c_2" type="text" />
    
    </label>
    
    <label>
    
    Cortisol 8 Horas
    
    <input name="c_3" type="text" />
    
    </label>
    
    <!--
    
    <label class="mensagem">
    
    Observa&ccedil;&atilde;o
    
    <textarea name="c_4"></textarea>
    
    </label>
    
    -->
    
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