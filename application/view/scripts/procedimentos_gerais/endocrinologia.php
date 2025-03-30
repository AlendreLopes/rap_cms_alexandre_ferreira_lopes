<?php

$procura_1 = '#A#';
$procura_2 = array('#A#','#B#');
$troca_1   = "sc_endocrinologia";
$troca_2   = array("sc_endocrinologia","775");

?>
<!DOCTYPE html>

<html>

<head>
	
	<title>Endocrinologia</title>
	
</head>

<body>

<div id="usuario">

	<div id="titulo">
	[ <a href="voltar">P&aacute;gina Inicial</a> ]
	</div>

</div>

<h1>Endocrinologia</h1>

<?php include("application/controller/plugins/indexModeloListagem.php");?>

<br clear="all" />

</body>

</html>