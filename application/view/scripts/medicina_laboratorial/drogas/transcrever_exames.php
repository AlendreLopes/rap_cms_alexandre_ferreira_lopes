<?php

$procura_1 = '#A#';
$procura_2 = array('#A#','#B#');
$troca_1   = "ml_dg_transcrever_exames";
$troca_2   = array("ml_dg_transcrever_exames","775");

?>
<!DOCTYPE html>

<html>

<head>
	
	<title>Trasncrever Exames</title>
	
</head>

<body>

<div id="usuario">

	<div id="titulo">
	[ <a href="voltar">P&aacute;gina Inicial</a> ]
	</div>

</div>

<h1>Relat&oacute;rio de Exames</h1>

<?php include("application/controller/plugins/indexModeloListagem.php");?>

<br clear="all" />

</body>

</html>