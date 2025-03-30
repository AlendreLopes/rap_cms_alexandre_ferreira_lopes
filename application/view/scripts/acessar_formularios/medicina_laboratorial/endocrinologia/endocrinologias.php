<!DOCTYPE html>

<html>

<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	
	<title>Endocrinologia</title>
	
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

$Laudo  = $SQL -> Consultar("SELECT * FROM protocolos, laudos_ml_e_endocrinologia WHERE protocolo_id = '$indice' AND _laudo = '$indice'");

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
		
		J&aacute; cadastrado nos Laudos de Endocrinologia Quimio.
	
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
	
	<legend>Laudo de Endocrinologia Quimio</legend>
	
	<form id="formulario" action="/application/models/medicina_laboratorial/endocrinologia/endocrinologia_cadastrar.php" method="post">
	
    <input type="hidden" name="laudo" value="<?php echo $indice;?>" />
    
    <label>
    
    ACTH
    
    <input name="c_2" type="text" />
    
    </label>
    <!--
    <label class="linha">
    
    Cortisol
    
    <input name="c_3" type="text" />
    
    </label>
    
    <label>
    
    Cortisol 2
    
    <input name="c_4" type="text" />
    
    </label>
    
    <label>
    
    Cortisol 3
    
    <input name="c_5" type="text" />
    
    </label>
    
    <label class="mensagem">
    
    Cortisol Observa&ccedil;&atilde;o
    
    <textarea name="c_6"></textarea>
    
    </label>
    -->
    <label class="linha">
    
    Estradiol
    
    <input name="c_7" type="text" />
    
    </label>
    
    <label>
    
    Insulina
    
    <input name="c_8" type="text" />
    
    </label>
    
    <!--
    
    <label>
    
    Insulina Glicose
    
    <input name="c_9" type="text" />
    
    </label>
    
    -->
    
    <label>
    
    Progesterona
    
    <input name="c_10" type="text" />
    
    </label>
    
    <label class="linha">
    
    T3
    
    <input name="c_11" type="text" />
    
    </label>
    
    <!--
    
    <label class="linha">
    
    T4 Di&aacute;lise
    
    <input name="c_12" type="text" />
    
    </label>
    
    -->
    
    <label>
    
    T4 Livre
    
    <input name="c_13" type="text" />
    
    </label>
    
    
    <label>
    
    T4 Total
    
    <input name="c_14" type="text" />
    
    </label>
    
    
    <label class="linha">
    
    Testosterona
    
    <input name="c_15" type="text" />
    
    </label>
    
    
    <label class="linha">
    
    TSH
    
    <input name="c_16" type="text" />
    
    </label>
    
    <label class="mensagem">
    
    Observa&ccedil;&atilde;o
    
    <textarea name="c_17"></textarea>
    
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