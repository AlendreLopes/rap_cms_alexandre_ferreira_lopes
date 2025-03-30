<?php

$procura_1 = '#A#';
$procura_2 = array('#A#','#B#');
$troca_1   = 'di_endoscopia';
$troca_2   = array('di_endoscopia','775');

?>
<!DOCTYPE html>

<html>

<head>
	
	<title>Endoscopia</title>
	
</head>

<body>

<div id="usuario">

	<div id="titulo">
	[ <a href="voltar">P&aacute;gina Inicial</a> ]
	</div>

</div>

<h1>Endoscopia</h1>

<?php include("application/controller/plugins/indexModeloListagem.php");?>

<br clear="all" />

</body>

</html>