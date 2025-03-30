<!DOCTYPE html>

<html>

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	
	<title>Citopatologia Vaginal</title>
	
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

$Laudo  = $SQL -> Consultar("SELECT * FROM protocolos, laudos_ap_citopatologia_vaginal WHERE protocolo_id = '$indice' AND _laudo = '$indice'");

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
		
		J&aacute; cadastrado nos Laudos de Citopatologia Vaginal.
	
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
	
	<legend>Laudo de Citopatologia Vaginal</legend>
	
	<form id="formulario" method="post" action="/application/models/anatomia_patologica/citopatologia_vaginal_cadastrar.php">
	
	<input type="hidden" name="laudo" value="<?php echo $indice;?>" />
	
    <!--
    
	<label>
	
	C&oacute;digo
	
	<input type="text" name="c_1" />
	
	</label>
    -->
	<label class="por_extenso">
	
	Amostra
	
	<input type="text" name="c_2" />
	
	</label>
	
	<label class="linha">
	
	C&eacute;lulas epiteliais queratinizadas
	
        <input type="text" name="c_3" />
    
	</label>
	
	<label class="linha">
	
	C&eacute;lulas epiteliais n&atilde;o queratinizadas
	
        <input type="text" name="c_4" />
    
	</label>
	
        <label class="linha">

        Eritr&oacute;cito

        <input type="text" name="c_5" />

        </label>

        <label class="linha">

        Bact&eacute;rias

        <input type="text" name="c_6" />

        </label>

        <label class="linha">

        Leuc&oacute;citos

        <input type="text" name="c_7" />

        </label>

        <label>

        Em Branco

        <input type="text" name="c_8" />

        </label>

        <label>

        Em Branco Resultado

        <input type="text" name="c_8_1" />

        </label>

        <label class="mensagem">

        Diagn&oacute;stico(s)

        <textarea name="c_9">CICLOESTRAL COMPAT&Iacute;VEL COM</textarea>

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