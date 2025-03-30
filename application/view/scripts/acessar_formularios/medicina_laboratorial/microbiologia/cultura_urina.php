<!DOCTYPE html>

<html>

<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	
	<title>Microbiologia</title>
	
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

$Laudo  = $SQL -> Consultar("SELECT * FROM protocolos, laudos_ml_m_cultura_urina WHERE protocolo_id = '$indice' AND _laudo = '$indice'");

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
		
		J&aacute; cadastrado nos Laudos de Microbiologia Cultura Urina e Antibiograma.
	
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
	
	<legend>Laudo de Microbiologia Cultura Urina e Antibiograma</legend>
	
	<form id="formulario" action="/application/models/medicina_laboratorial/microbiologia/cultura_urina_cadastrar.php" method="post">
	
        <input type="hidden" name="laudo" value="<?php echo $indice;?>" />
    
	<label class="linha"><strong>Cultura de Urina e Antibiograma Veterin&aacute;rio</strong></label>
    
	<label>
	
	Amostra
	
	<input type="text" name="c_7" />
	
	</label>
	
	<label class="mensagem">
	
	Resultado
	
	<textarea name="c_7_1"></textarea>
	
	</label>
    
	<label class="mensagem">
	
	Antibiograma
	
        <textarea name="c_7_2">CULTURA E ANTIBIOGRAMA
BETA-LACT&Acirc;MICOS (B)
Penicilina.................................SENS&Iacute;VEL
Cefadroxil................................SENS&Iacute;VEL
Ampicilina................................SENS&Iacute;VEL
Amoxicilina + &aacute;c. clavul&ocirc;nico....SENS&Iacute;VEL
Cefalexina................................SENS&Iacute;VEL
Ceftriaxona..............................SENS&Iacute;VEL
Cefalotina................................SENS&Iacute;VEL

AMINOGLICOS&Iacute;DEOS (A)
Estreptomicina.........................SENS&Iacute;VEL
Gentamicina............................SENS&Iacute;VEL
Neomicina...............................SENS&Iacute;VEL
Tobramicina.............................SENS&Iacute;VEL
Amicacina................................SENS&Iacute;VEL

INIBIDORES DE FOLATO (SULFAS) S
Sulfazotrim..............................SENS&Iacute;VEL

MACROL&Iacute;DEOS (M)
Rifampicina.............................SENS&Iacute;VEL
Eritromicina............................ SENS&Iacute;VEL
Azitromicina........................... SENS&Iacute;VEL

TETRACICLINAS (T)
Tetraciclina..............................SENS&Iacute;VEL
Doxiciclina...............................SENS&Iacute;VEL

QUINOLONAS (Q)
Norfloxacina...........................SENS&Iacute;VEL
Ciprofloxacina........................SENS&Iacute;VEL
Levofloxacina.........................SENS&Iacute;VEL
Enrofloxacina.........................SENS&Iacute;VEL

LINCOSAM&Iacute;DEOS (L)
Clindamicina.......................... SENS&Iacute;VEL
Lincomicina........................... SENS&Iacute;VEL

FENICOIS
Cloranfenicol.........................SENS&Iacute;VEL</textarea>
	
	</label>
	
	<label class="mensagem">
	
	<strong>Observa&ccedil;&atilde;o</strong>
	
	<textarea name="c_8"></textarea>
	
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