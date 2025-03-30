<!DOCTYPE html>

<html>

<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	
	<title>Eletrocardiograma</title>
	
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

$Laudo  = $SQL -> Consultar("SELECT * FROM protocolos, laudos_sc_eletrocardiograma WHERE protocolo_id = '$indice' AND _laudo = '$indice'");

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
		
		J&aacute; cadastrado nos Laudos de Eletrocardiograma.
	
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
	
	<legend>Laudo de Eletrocardiograma</legend>
	
	<form id="formulario" action="/application/models/procedimentos_gerais/eletrocardiograma_cadastrar.php" method="post">
	
    <input type="hidden" name="laudo" value="<?php echo $indice;?>" />
    
	<table class="tablesorter" cellspacing="1">
        <tbody>
        <tr>
        <td colspan="6">Frequ&ecirc;ncia Card&iacute;aca</td>
        </tr>
        <tr>
        <td>&nbsp;</td>
        <td>Batimento</td>
        <td><input type="text" name="c_2" /></td>
        <td>bat/min</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
        <tr>
        <td>&nbsp;</td>
        <td>Ritmo</td>
        <td><input type="text" name="c_3" /></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
        <tr>
        <td>&nbsp;</td>
        <td>Eixo</td>
        <td><input type="text" name="c_4" /></td>
        <td>&deg;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
        <tr>
        <td colspan="6">&nbsp;</td>
        </tr>
        <tr>
        <td>&nbsp;</td>
        <td>Onda P</td>
        <td><input type="text" name="c_5" /></td>
        <td>mV</td>
        <td><input type="text" name="c_6" /></td>
        <td>S</td>
        </tr>
        <tr>
        <td>&nbsp;</td>
        <td>PR</td>
        <td><input type="text" name="c_7" /></td>
        <td>s</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
        <tr>
        <td>&nbsp;</td>
        <td>QRS</td>
        <td><input type="text" name="c_8" /></td>
        <td>s</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
        <tr>
        <td>&nbsp;</td>
        <td>R</td>
        <td><input type="text" name="c_9" /></td>
        <td>s</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
        <tr>
        <td>&nbsp;</td>
        <td>ST</td>
        <td><input type="text" name="c_10" /></td>
        <td>mV</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
        <tr>
        <td>&nbsp;</td>
        <td>T</td>
        <td><input type="text" name="c_11" /></td>
        <td>mV</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
        <tr>
        <td>&nbsp;</td>
        <td>QT</td>
        <td><input type="text" name="c_12" /></td>
        <td>s</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
        </tbody>
	</table>
	
	<label class="mensagem">
	
	Outros
	
	<textarea name="c_13"></textarea>
	
	</label>
	
	<label class="mensagem">
	
	Interpreta&ccedil;&atilde;o
	
        <textarea name="c_14">Frequ&ecirc;ncia card&iacute;aca dentro dos padr&otilde;es da normalidade.
Arritmia sinusal compat&iacute;vel com stress de conten&ccedil;&atilde;o, comum em ra&iacute;as braquicef&oacute;licas, anormalidades respirat&oacute;rias.
Ritmo sinusal compat&iacute;vel com a normalidade.
Eixo card&iacute;ao dentro dos padr&otilde;es da normalidade.
Onda P pulmonale compat&iacute;vel com aumento de &aacute;trio direito.
Segmento PR aumentado compat&iacute;vel com bloqueio &aacute;trio ventricular grau I.
Complexo QRS de curta voltagem compat&iacute;vel com obesidade, efus&atilde;o pleural, peric&aacute;rdica, hipotireoidismo.
Complexo QRS de longa dura&ccedil;&atilde;o compat&iacute;vel com bloqueio de ramo de feixe esquerdo.
Depress&atilde;o do segmento ST compat&iacute;vel com hip&oacute;xia do mioc&aacute;rdio, infarto do mioc&aacute;rdio, hipercalemia, hipocalemia, trauma card&iacute;ao.
Eleva&ccedil;&atilde;o do segmento ST compat&iacute;vel com infarto do mioc&aacute;rdio, pericardite, hip&oacute;xia do mioc&aacute;rdio.
Onda T aumentada compat&iacute;vel com hip&oacute;xia mioc&aacute;rdica, bloqueios de ramo de feixe ou aumento ventricular, desequil&iacute;brios eletrol&iacute;ticos, doen&ccedil;as metab&oacute;licas e anormalidades respirat&oacute;rias.</textarea>
	
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