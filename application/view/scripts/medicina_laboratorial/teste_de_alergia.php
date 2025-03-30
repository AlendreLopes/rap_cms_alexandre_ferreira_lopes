<?php

$procura_1 = '#A#';
$procura_2 = array('#A#','#B#');
$troca_1   = "ml_teste_de_alergia";
$troca_2   = array("ml_teste_de_alergia","775");

?>
<!DOCTYPE html>

<html>

<head>
	
	<title>Teste de Alergia</title>
	
</head>

<body>

<div id="usuario">

	<div id="titulo">
	[ <a href="voltar">P&aacute;gina Inicial</a> ]
	</div>

</div>

<h1>Teste de Alergia</h1>

<?php include("application/controller/plugins/indexModeloListagem.php");?>

<br clear="all" />

</body>

</html>