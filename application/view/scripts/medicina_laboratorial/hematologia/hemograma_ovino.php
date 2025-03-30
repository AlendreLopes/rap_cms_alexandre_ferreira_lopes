<?php

$procura_1 = '#A#';
$procura_2 = array('#A#','#B#');
$troca_1   = "ml_h_hemograma_ovino";
$troca_2   = array("ml_h_hemograma_ovino","775");

?>
<!DOCTYPE html>

<html>

<head>
	
	<title>Hemograma Ovino</title>
	
</head>

<body>

<div id="usuario">

	<div id="titulo">
	[ <a href="voltar">P&aacute;gina Inicial</a> ]
	</div>

</div>

<br />

<h1>Hemograma Ovino</h1>

<div id="protocolo">

	Procurar Exame
	
	<form id="protocolos_realizados">
	
	<input type="text" name="protocolo" class="is_required" />

	<input type="hidden" name="tabela"     value="laudos_ml_h_hemograma_ovino" />
	<input type="hidden" name="extensao"   value="_" />
	<input type="hidden" name="pasta"      value="medicina_laboratorial" />
	<input type="hidden" name="subpasta"   value="hematologia" />
	<input type="hidden" name="pagina"     value="hemograma_ovino" />
	<input type="hidden" name="visualizar" value="_visualizar" />
	
	</form>

</div>

<?php include("application/controller/plugins/indexModeloListagem.php");?>

</body>

</html>