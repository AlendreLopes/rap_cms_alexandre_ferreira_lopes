<!DOCTYPE html>

<html>

<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	
	<title>Leucograma</title>
	
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

$Laudo  = $SQL -> Consultar("SELECT * FROM protocolos, laudos_ml_h_leucograma WHERE protocolo_id = '$indice' AND _laudo = '$indice'");

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
		
		J&aacute; cadastrado nos Laudos de Leucograma.
	
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
	
	<legend>Laudo de Leucograma</legend>
	
	<form id="formulario" action="/application/models/medicina_laboratorial/hematologia/leucograma_cadastrar.php" method="post">
	
    <input type="hidden" name="laudo" value="<?php echo $indice;?>" />
    
	<label class="linha">
	
	<strong>Leucocitos</strong>
	
	<input type="text" name="c_2" />
	
	</label>
	
	<label class="linha">
	
	<strong>Eosinofilos</strong>
	
	</label>
	
		<label>
		
		Absoluto
		
		<input type="text" name="c_3" />
		
		</label>
		
		<label>
		
		Relativo
		
		<input type="text" name="c_4" />
		
		</label>
	
	<label class="linha">
	
	<strong>Linfocitos</strong>
	
	</label>
	
		<label>
		
		Absoluto
		
		<input type="text" name="c_5" />
		
		</label>
		
		<label>
		
		Relativo
		
		<input type="text" name="c_6" />
		
		</label>
	
	<label class="linha">
	
	<strong>Monocitos</strong>
	
	</label>
	
		<label>
		
		Absoluto
		
		<input type="text" name="c_7" />
		
		</label>
		
		<label>
		
		Relativo
		
		<input type="text" name="c_8" />
		
		</label>
	
	<label class="linha">
	
	<strong>Bastonetes</strong>
	
	</label>
	
		<label>
		
		Absoluto
		
		<input type="text" name="c_9" />
		
		</label>
		
		<label>
		
		Relativo
		
		<input type="text" name="c_10" />
		
		</label>
	
	</label>
	
	<label class="linha">
	
	<strong>Segmentados</strong>
	
	</label>
	
		<label>
		
		Absoluto
		
		<input type="text" name="c_11" />
		
		</label>
		
		<label>
		
		Relativo
		
		<input type="text" name="c_12" />
		
		</label>
	
	<label class="linha">
	
	<strong>Bas&oacute;filos</strong>
	
	</label>
	
		<label>
		
		Absoluto
		
		<input type="text" name="c_12_1" />
		
		</label>
		
		<label>
		
		Relativo
		
		<input type="text" name="c_12_2" />
		
		</label>
	
	<label class="linha">
	
	<strong>Outros</strong>
	
    <input type="text" name="c_12_3" />
    
	</label>
	
		<label>
		
		Absoluto
		
		<input type="text" name="c_12_4" />
		
		</label>
		
		<label>
		
		Relativo
		
		<input type="text" name="c_12_5" />
		
		</label>
	
		<label>
		
		Referência C&atilde;o
		
		<input type="text" name="c_12_6" />
		
		</label>
		
		<label>
		
		Referência Gato
		
		<input type="text" name="c_12_7" />
		
		</label>
	
	</label>
	
	<label class="linha"></label>
	
	<label>
	
	<strong>Plaquetas</strong>
	
	<input type="text" name="c_13" />
	
	</label>
	
	<label class="mensagem">
	
	<strong>Observa&ccedil;&atilde;o</strong>
	
	<textarea name="c_14"></textarea>
	
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