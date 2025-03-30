<!DOCTYPE html>

<html>

<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	
	<title>Bioqu&iacute;mica</title>
	
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

$Laudo  = $SQL -> Consultar("SELECT * FROM protocolos, laudos_ml_bioquimica WHERE protocolo_id = '$indice' AND _laudo = '$indice'");

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
		
		J&aacute; cadastrado nos Laudos de Bioqu&iacute;mica.
	
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
<legend>Bioqu&iacute;mica</legend>
	
	<form id="formulario" action="/application/models/medicina_laboratorial/bioquimica_cadastrar.php" method="post">
	
    <input type="hidden" name="laudo" value="<?php echo $indice;?>" />
    
	<label>
	
	Albumina
	
	<input type="text" name="c_2" />
	
	</label>
	
	<label>
	
	Albumina Amostra
	
	<input type="text" name="c_3" />
	
	</label>
	
	<label>
	
	TGP
	<input type="text" name="c_4" />
	
	</label>
	
	<label>
	
	TGP Amostra
	
	<input type="text" name="c_5" />
	
	</label>
	
	<label>
	
	Amilase
	
	<input type="text" name="c_6" />
	
	</label>
	
	<label>
	
	Amilase Amostra
	
	<input type="text" name="c_7" />
	
	</label>
	
    <!--
    
	<label>
	
	Amonia
	
	<input type="text" name="c_66" />
	
	</label>
	
	<label>
	
	Amonia M&eacute;todo
	
	<input type="text" name="c_65" />
	
	</label>
	
	<label>
	
	Amonia Valor de refer&ecirc;ncia Canino:
	
	<input type="text" name="c_67" />
	
	</label>
	
	<label>
	
	Amonia Valor de refer&ecirc;ncia Felino:
	
	<input type="text" name="c_68" />
	
	</label>
	
    -->
    
	<label>
	
	TGO
	
	<input type="text" name="c_8" />
	
	</label>
	
	<label>
	
	TGO Amostra
	
	<input type="text" name="c_9" />
	
	</label>
	
	<label>
	
	Bilirrubina Total
	
	<input type="text" name="c_10" />
	
	</label>
	
	<label>
	
	Bilirrubina Total Amostra
	
	<input type="text" name="c_11" />
	
	</label>
	
	<label>
	
	Bilirrubina Direta
	
	<input type="text" name="c_12" />
	
	</label>
	
	<label>
	
	Bilirrubina Direta Amostra
	
	<input type="text" name="c_13" />
	
	</label>
	
	<label>
	
	Bilirrubina Indireta
	
	<input type="text" name="c_14" />
	
	</label>
	
	<label>
	
	Bilirrubina Indireta Amostra
	
	<input type="text" name="c_15" />
	
	</label>
	
	<label>
	
	Calcio
	<input type="text" name="c_16" />
	
	</label>
	
	<label>
	
	Calcio Amostra
	
	<input type="text" name="c_17" />
	
	</label>
	
	<label class="linha">
	
	Cloro
	
	<input type="text" name="c_69" />
	
	</label>
	
	<label>
	
	Colesterol
	
	<input type="text" name="c_18" />
	
	</label>
	
	<label>
	
	Colesterol Amostra
	
	<input type="text" name="c_19" />
	
	</label>
	
	<label class="linha">
	
	Colesterol HDL
	
	<input type="text" name="c_19_1" />
	
	</label>
	
	<label class="linha">
	
	Colesterol LDL
	
	<input type="text" name="c_19_2" />
	
	</label>
	
	<label class="linha">
	
	Colesterol VLDL
	
	<input type="text" name="c_19_3" />
	
	</label>
	
	<label>
	
	Creatina Quinase
	
	<input type="text" name="c_20" />
	
	</label>
	
	<label>
	
	Creatina Quinase Amostra
	
	<input type="text" name="c_21" />
	</label>
	
	<label>
	
	Creatinina
	
	<input type="text" name="c_22" />
	
	</label>
	
	<label>
	
	Creatinina Amostra
	
	<input type="text" name="c_23" />
	
	</label>
	
	<label class="linha">
	
	Ferro
	
	<input type="text" name="c_70" />
	
	</label>
	
	<label>
	
	Fosfatase Alcalina
	
	<input type="text" name="c_24" />
	
	</label>
	
	<label>
	
	Fosfatase Alcalina Amostra
	
	<input type="text" name="c_25" />
	
	</label>
	
	<label class="linha">
	
	Fosforo
	
	<input type="text" name="c_26" />
	
	</label>
	<!--
	<label>
	
	Fosforo Valor de Refer&ecirc;ncia
	
	<input type="text" name="c_27" />
	
	</label>
	
	<label>
	
	Fosforo Amostra
	
	<input type="text" name="c_28" />
	
	</label>
	
	<label>
	
	Fosforo	M&eacute;todo
	
	<input type="text" name="c_29" />
	
	</label>
	-->
    
	<label class="linha">
	
	Frutosamina
	
	<input type="text" name="c_30" />
	
	</label>
	
    <!--
	
    <label>
	
	Frutosamina Valor de Refer&ecirc;ncia
	
	<input type="text" name="c_31" />
	
	</label>
	
	<label>
	
	Frutosamina Amostra
	
	<input type="text" name="c_32" />
	
	</label>
	
	<label>
	
	Frutosamina M&eacute;todo
	
	<input type="text" name="c_33" />
	
	</label>
	
    -->
    
	<label>
	
	Gama Glutamiltransfirase
	
	<input type="text" name="c_34" />
	
	</label>
	
	<label>
	
	Gama Glutamiltransfirase Amostra
	
	<input type="text" name="c_35" />
	
	</label>
	
	<label>
	
	Glicose
	
	<input type="text" name="c_36" />
	
	</label>
	
	<label>
	
	Glicose Amostra
	
	<input type="text" name="c_37" />
	
	</label>
	
	<label>
	
	Globulinas
	
	<input type="text" name="c_38" />
	
	</label>
	
	<label>
	
	Globulinas Amostra
	
	<input type="text" name="c_39" />
	
	</label>
	
    <!--
    
	<label>
	
	Globulinas M&eacute;todo
	
	<input type="text" name="c_40" />
	
	</label>
	
	<label>
	
	Hemoglobina
	
	<input type="text" name="c_41" />
	
	</label>
	
	<label>
	
	Hemoglobina Amostra
	
	<input type="text" name="c_42" />
	
	</label>
	
	-->
    
	<label>
	
	Lactato Desidrogenase (LDH)
	
	<input type="text" name="c_43" />
	
	</label>
	
    <!--
    
	<label>
	
	LDH Valor de Refer&ecirc;ncia
	
	<input type="text" name="c_44" />
	
	</label>
	
    -->
    
	<label>
	
	LDH Amostra
	<input type="text" name="c_45" />
	
	</label>
	
	<label>
	
	Lipase
	<input type="text" name="c_46" />
	
	</label>
	
	<label>
	
	Lipase Amostra
	
	<input type="text" name="c_47" />
	
	</label>
	
	<label class="linha">
	
	Magnesio
	
	<input type="text" name="c_48" />
	
	</label>
    
	<!--
	<label>
	
	Magnesio Valor de Refer&ecirc;ncia
	
	<input type="text" name="c_49" />
	
	</label>
	
	<label>
	
	Magnesio Amostra
	
	<input type="text" name="c_50" />
	
	</label>
	
	<label>
	
	Magnesio M&eacute;todo
	
	<input type="text" name="c_51" />
	
	</label>
	
    -->
    
	<label>
	
	Potassio
	
	<input type="text" name="c_52" />
	
	</label>
	
	<label>
	
	Potassio Amostra
	
	<input type="text" name="c_54" />
	
	</label>
	
    <!--
    
	<label>
	
	Potassio M&eacute;todo
	
	<input type="text" name="c_54_1" />
	
	</label>
	
    <label class="mensagem">
	
	Potassio Valor de Refer&ecirc;ncia
	
    <textarea name="c_53"></textarea>
	
	</label>
	
    -->
    
    <label>
	
	Proteina Total
	
	<input type="text" name="c_55" />
	
	</label>
	
	<label>
	
	Proteina Total Amostra
	
	<input type="text" name="c_56" />
	
	</label>
	
	<label>
	
	Sodio
	
	<input type="text" name="c_57" />
	
	</label>
	
	<label>
	
	Sodio Amostra
	
	<input type="text" name="c_58" />
	
	</label>
	
    <!--
    
	<label>
	
	Sodio M&eacute;todo
	
	<input type="text" name="c_58_1" />
	
	</label>
	
    -->
    
	<label>
	
	Triglicerideos
	
	<input type="text" name="c_59" />
	
	</label>
	
	<label>
	
	Triglicerideos Amostra
	
	<input type="text" name="c_60" />
	
	</label>
	
	<label>
	
	Ureia
	<input type="text" name="c_61" />
	
	</label>
	
	<label>
	
	Ureia Amostra
	
	<input type="text" name="c_62" />
	
	</label>
	
    <!--
    
	<label class="mensagem">
	
	Outros
	
	<textarea name="c_63"></textarea>
	
	</label>
	
    -->
    
	<label class="mensagem">
	
	Observa&ccedil;&atilde;o
	
	<textarea name="c_64"></textarea>
	
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