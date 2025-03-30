<?php

$procura_1 = '#A#';
$procura_2 = array('#A#','#B#');
$troca_1   = 'ap_citopatologia_vaginal';
$troca_2   = array('ap_citopatologia_vaginal','citopatologia');

?>
<!DOCTYPE html>

<html>

<head>
	
	<title>Citopatologia Vaginal</title>
	
</head>

<body>

<div id="usuario">

	<div id="titulo">
	[ <a href="voltar">P&aacute;gina Inicial</a> ]
	</div>

</div>

<h1>Citopatologia Vaginal</h1>
	
<?php include("application/controller/plugins/indexModeloListagem.php");?>

<br clear="all" />

</body>

</html>