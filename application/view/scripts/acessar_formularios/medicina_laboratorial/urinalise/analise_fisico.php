<!DOCTYPE html>

<html>

<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	
	<title>analise_fisico</title>
	
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

$Laudo  = $SQL -> Consultar("SELECT * FROM protocolos, laudos_ml_u_analise_fisico WHERE protocolo_id = '$indice' AND _laudo = '$indice'");

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
		
		J&aacute; cadastrado nos Laudos de An&aacute;lise F&iacute;sico Quimica de C&aacute;culo.
	
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
    
    <legend>Laudo de An&aacute;lise F&iacute;sico Quimica de C&aacute;culo</legend>
	
	<form id="formulario" action="/application/models/medicina_laboratorial/urinalise/analise_fisico_cadastrar.php" method="post">
	
    <input type="hidden" name="laudo" value="<?php echo $indice;?>" />
    
	<label class="linha">
	
	<strong>Caracteres F&iacute;sicos</strong>
	
	</label>
	
	<label>
	
	Forma:
	
	<input type="text" name="c_2" />
	
	</label>
	
	<label>
	
	Dimens&otilde;es:
	
	<input type="text" name="c_3" />
	
	</label>
	
	<label>
	
	Cor:
	
	<input type="text" name="c_4" />
	
	</label>
	
	<label>
	
	Consist&ecirc;ncia:
	
	<input type="text" name="c_5" />
	
	</label>
	
	<label>
	
	Superf&iacute;cie:
	
	<input type="text" name="c_6" />
	
	</label>
	
	<label>
	
	Aspecto:
	
	<input type="text" name="c_7" />
	
	</label>
	
	<label>
	
	Peso:
	
	<input type="text" name="c_8" />
	
	</label>
	
	<label class="linha">
	
	<strong>Exame Qu&iacute;mico</strong>
	
	</label>
	
	<label>
	
	Carbonato:
	
	<input type="text" name="c_9" />
	
	</label>
	
	<label>
	
	Oxalto:
	
	<input type="text" name="c_10" />
	
	</label>
	
	<label>
	
	C&aacute;lcio:
	
	<input type="text" name="c_11" />
	
	</label>
	
	<label>
	
	Fosfato:
	
	<input type="text" name="c_12" />
	
	</label>
	
	<label>
	
	Magn&eacute;sio:
	
	<input type="text" name="c_13" />
	
	</label>
	
	<label>
	
	Am&ocirc;nio:
	
	<input type="text" name="c_14" />
	
	</label>
	
	<label>
	
	Urato:
	
	<input type="text" name="c_15" />
	
	</label>
	
	<label>
	
	Cistina:
	
	<input type="text" name="c_16" />
	
	</label>
	
	<label class="mensagem">
	
	Conclus&atilde;o:
	
	<textarea name="c_17"></textarea>
	
	</label>
	
	<label class="mensagem">
	
	Observa&ccedil;&atilde;o
	
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