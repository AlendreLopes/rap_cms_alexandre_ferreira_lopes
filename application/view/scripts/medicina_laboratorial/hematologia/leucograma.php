<?php

$procura_1 = '#A#';
$procura_2 = array('#A#','#B#');
$troca_1   = "ml_h_leucograma";
$troca_2   = array("ml_h_leucograma","775");

?>
<!DOCTYPE html>

<html>

<head>
	
	<title>Leucograma</title>
	
</head>

<body>

<div id="usuario">

	<div id="titulo">
	[ <a href="voltar">P&aacute;gina Inicial</a> ]
	</div>

</div>

<h1>Leucograma</h1>

<?php include("application/controller/plugins/indexModeloListagem.php");?>

<br clear="all" />

</body>

</html>