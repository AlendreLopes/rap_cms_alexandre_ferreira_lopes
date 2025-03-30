<?php

$procura_1 = '#A#';
$procura_2 = array('#A#','#B#');
$troca_1   = "sc_fisioterapia";
$troca_2   = array("sc_fisioterapia","775");

?>
<!DOCTYPE html>

<html>

<head>
	
	<title>fisioterapia</title>
	
</head>

<body>

<div id="usuario">

	<div id="titulo">
	[ <a href="voltar">P&aacute;gina Inicial</a> ]
	</div>

</div>

<h1>Fisioterapia</h1>

<?php include("application/controller/plugins/indexModeloListagem.php");?>

<br clear="all" />

</body>

</html>