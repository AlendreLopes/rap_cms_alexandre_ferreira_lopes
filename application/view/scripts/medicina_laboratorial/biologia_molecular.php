<?php

$procura_1 = '#A#';
$procura_2 = array('#A#','#B#');
$troca_1   = "ml_biologia_molecular";
$troca_2   = array("ml_biologia_molecular","775");

?>
<!DOCTYPE html>

<html>

<head>
	
	<title>Biologia Molecular</title>
	
</head>

<body>

<div id="usuario">

	<div id="titulo">
	[ <a href="voltar">P&aacute;gina Inicial</a> ]
	</div>

</div>

<h1>Biologia Molecular</h1>

<?php include("application/controller/plugins/indexModeloListagem.php");?>

<br clear="all" />

</body>

</html>