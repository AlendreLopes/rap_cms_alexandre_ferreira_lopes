<?php

	include("application/controller/filters/indexSessions.php");

	function __autoload($classe)
	{
		$pastas = array('filters', 'log', 'plugins');
		foreach ($pastas as $pasta)
		{
			if (file_exists("application/controller/{$pasta}/index{$classe}.php"))
			{
				include_once "application/controller/{$pasta}/index{$classe}.php";
			}
		}
	}

	$SQL = new Connect();

?>

<!DOCTYPE html>

<html>

<head>

    <title>Pet Imagem [ Sistema de Laudos ]</title>

    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

    <meta http-equiv="content-language" content="pt-BR" />

    <meta http-equiv="cache-control" content="no-cache,no-store" />

    <meta http-equiv="pragma" content="no-cache" />

    <meta http-equiv="expires" content="Mon, 22 jul 2006 11:12:01 GMT" />

    <script type="text/javascript" src="/library/jquery/jquery.js"></script>

    <script type="text/javascript" src="/library/plugins/form/jquery_form_validate.js"></script>

    <script type="text/javascript" src="/library/plugins/masked/jquery_masked_input.js"></script>

    <script type="text/javascript" src="/library/plugins/portal_laudos/jquery_laudos.js"></script>

    <link rel="icon" href="/public/image/favicon.ico" type="image/x-icon" />

    <link rel="shortcut icon" href="/public/image/favicon.ico" type="image/x-icon" />

    <link rel="stylesheet" type="text/css" media="all" href="/public/styles/estrutura_sistema_.css" />

	<style type="text/css">
		#resultado{ clear:both;}
	</style>

</head>

<body>

<div id="carregando"><div id="carregando_aviso">Trabalhando na sua Solicita��o.</div></div>

<div id="pagina">

<div id="cabecalho">

    <a style="float:right; margin:10px 5px 0 0;" href="/application/controller/filters/indexSessionsSair.php" title="Sair do [ Sistema de Laudos ]">
	<img src="/public/image/chave_sair.png" />
	</a>

</div>

<div id="principal">

<div id="usuario">

    <?php echo $_COOKIE["sl_nome"]; ?>

</div>

<div id="sair" style="display:none;">

    <!-- Exibe a mascara -->
    <input type="hidden" name="mascara" value="<?php include_once("application/controller/plugins/indexPesquisaMascara.php");?>" />

</div>

<?php
if($_GET["pagina"] != "")
{
    echo "<div id=\"sair\">\n";

        echo "<div id=\"titulo\">\n";
        echo "[ <a href=\"voltar\" title=\"Voltar para p&aacute;gina inicial\">P&aacute;gina Inicial</a> ]\n";
        echo "</div>\n";

    echo "</div>\n";
}
?>

<div id="protocolo">

    <form id="protocolos">

    <input type="text" name="protocolos" class="is_required" />

    </form>

</div>

<div id="texto"><?php include_once("application/controller/filters/indexController.php"); ?></div>

<br style="clear:both;"/>

<div class="clear"></div>

<br style="clear:both;"/>

</div>

<div id="rodape"></div>

<div id="aferti">

<a href="http://www.aferti.com.br" target="_blank" title="A F &amp; R TI">A F &amp; R TI</a>

</div>

</body>

</html>
