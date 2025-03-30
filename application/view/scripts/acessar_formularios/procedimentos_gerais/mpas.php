<!DOCTYPE html>

<html>

<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	
	<title>MPAs</title>
	
	<script type="text/javascript" src="/library/plugins/form/jquery_form.js"></script>
	
	<script type="text/javascript" src="/library/plugins/validation/jquery_validate.js"></script>
	
	<script type="text/javascript" src="/library/plugins/portal_laudos/jquery_laudos_cadastrar.js"></script>
	
	<link type="text/css" rel="stylesheet" media="screen" href="/public/styles/sistema_formularios.css" />
	
	<style type="text/css">
		#resultado{ clear:both;}
		td input{
			color     :#fff;
			width     :150px;
			background:#003300;
			border    :1px solid #000;
		}
		td input:focus, select:focus, textarea:focus{
			color      :#fff;
			background :#003300;
			border     :1px solid #fff;
			font-weight:bold;
		}
	</style>
	
</head>

<body>

<?php

$Laudo  = $SQL -> Consultar("SELECT * FROM protocolos, laudos_sc_mpas WHERE protocolo_id = '$indice' AND _laudo = '$indice'");

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
		
		J&aacute; cadastrado nos Laudos de MPAs.
	
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
	
	<legend>Laudo de MPAs</legend>
	
	<form id="formulario" action="/application/models/procedimentos_gerais/mpas_cadastrar.php" method="post">
	
    <input type="hidden" name="laudo" value="<?php echo $indice;?>" />
    
	<table class="tablesorter" cellspacing="1">
		
		<thead>
		<tr>
		<th>Tomadas</th>
		<th>Sist&oacute;lica</th>
		<th>Diast&oacute;lica</th>
		<th>M&eacute;dia</th>
		</tr>
		</thead>
		
		<tfoot>
		<tr>
		<th>Tomadas</th>
		<th>Sist&oacute;lica</th>
		<th>Diast&oacute;lica</th>
		<th>M&eacute;dia</th>
		</tr>
		</tfoot>
		
		<tbody>
		<tr>
		<td>1</td>
		<td><input type="text" name="c_2" /></td>
		<td><input type="text" name="c_7" /></td>
		<td><input type="text" name="c_12" /></td>
		</tr>
		<tr>
		<td>2</td>
		<td><input type="text" name="c_3" /></td>
		<td><input type="text" name="c_8" /></td>
		<td><input type="text" name="c_13" /></td>
		</tr>
		<tr>
		<td>3</td>
		<td><input type="text" name="c_4" /></td>
		<td><input type="text" name="c_9" /></td>
		<td><input type="text" name="c_14" /></td>
		</tr>
		<tr>
		<td>4</td>
		<td><input type="text" name="c_5" /></td>
		<td><input type="text" name="c_10" /></td>
		<td><input type="text" name="c_15" /></td>
		</tr>
		<tr>
		<td>5</td>
		<td><input type="text" name="c_6" /></td>
		<td><input type="text" name="c_11" /></td>
		<td><input type="text" name="c_16" /></td>
		</tr>
		</tbody>
	</table>
	
	<label class="mensagem">
	
	Interpretacao
	
	<textarea name="c_17">Valores de medida de pressão arterial sistólica, diastólica e média dentro dos padrões da normalidade.
 
OBSERVAÇÃO:
Normal: sistólica = 90 a 140 mmHg e diastólica = 65 a 85 mmHg
Limites superiores da normalidade: sistólica = 141 a 150 mmHg e diastólica = 86 a 90 mmHg
Hipertensão leve: sistólica = 151 a 159 mmHg e diastólica = 91 a 99 mmHg
Hipertensão moderada: sistólica = 160  170 mmHg e diastólica = 100 a 109 mmHg
Hipertensão grave: sistólica = 180 a 209 mmHg e diastólica = 110 a 119 mmHg
Hipertensão muito grave: sistólica = igual ou maior a 210 e diastólica = igual ou maior a 120 mmHg</textarea>
	
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