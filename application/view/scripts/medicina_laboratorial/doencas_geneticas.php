<?php

$procura_1 = '#A#';
$procura_2 = array('#A#','#B#');
$troca_1   = "ml_doencas_geneticas";
$troca_2   = array("ml_doencas_geneticas","775");

?>
<!DOCTYPE html>

<html>

<head>
	
	<title>Doen&ccedil;as Gen&eacute;ticas</title>
	
</head>

<body>

<div id="usuario">

	<div id="titulo">
	[ <a href="voltar">P&aacute;gina Inicial</a> ]
	</div>

</div>

<br />

<br />

<h1>Doen&ccedil;as Gen&eacute;ticas</h1>

<div id="protocolo">

	Procurar Exame
	
	<form id="protocolos_realizados">
	
	<input type="text" name="protocolo" class="is_required" />

	<input type="hidden" name="tabela"     value="laudos_ml_doencas_geneticas" />
	<input type="hidden" name="extensao"   value="_" />
	<input type="hidden" name="pasta"      value="medicina_laboratorial" />
	<input type="hidden" name="subpasta"   value="" />
	<input type="hidden" name="pagina"     value="doencas_geneticas" />
	<input type="hidden" name="visualizar" value="_visualizar" />
	
	</form>

</div>

<?php include("application/controller/plugins/indexModeloListagem.php");?>

</body>

</html>