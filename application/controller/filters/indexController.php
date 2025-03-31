<?php

if ($_SERVER['REQUEST_METHOD'] == "GET") {

	$pagina = isset($_GET['pagina']) ? Functions::seg_($_GET['pagina']) : "protocolos";

	$indice = Functions::seg_($_GET['indice']);

	$indices = Functions::seg_($_GET['indices']);

	$laudo = Functions::seg_($_GET['laudo']);

	$imagem = Functions::seg_($_GET['imagem']);

	$error = 'application/controller/error/error.php';

	$extencao = '.php';

	$incluir = ($pagina == "cadastrar") ? 'indexMenuExames' : 'indexMenu';

	echo "<div id=\"index_menu\">\n";
	include_once("application/controller/filters/{$incluir}.php");
	echo "</div>\n";

	// Verifica algum resultado no Menu Prim�rio
	$p_ = $SQL->Consultar("SELECT * FROM tb_menu_primario WHERE primario_pagina = '$pagina' AND primario_dispor = 's'");
	$ps_ = mysql_num_rows($p_);

	// Verifica algum resultado no Menu Secund�rio
	$s_ = $SQL->Consultar("SELECT * FROM tb_menu_secundario WHERE secundario_pagina = '$pagina' AND secundario_dispor = 's'");
	$ss_ = mysql_num_rows($s_);

	if ($ps_) {
		$list = mysql_fetch_array($p_);
		$caminho = "application/view/scripts/{$list[primario_pasta]}/" . $pagina . $extencao;
	} else if ($ss_) {
		$list = mysql_fetch_array($s_);
		$caminho = "application/view/scripts/{$list[secundario_pasta]}/{$list[secundario_subpasta]}/" . $pagina . $extencao;
	} else if (preg_match("/_visualizar/i", $pagina)) {
		// Verifica a exist�ncia de "_visualizar" na vari�vel p�gina
		$p = str_replace('_visualizar', '', $pagina);

		$p_p = $SQL->Consultar("SELECT * FROM tb_menu_primario WHERE primario_pagina = '$p'");
		$p_ps = mysql_num_rows($p_p);

		$p_s = $SQL->Consultar("SELECT * FROM tb_menu_secundario WHERE secundario_pagina = '$p'");
		$p_ss = mysql_num_rows($p_s);

		if ($p_ps) {
			$list = mysql_fetch_array($p_p);
			$caminho = "application/view/scripts/{$list[primario_pasta]}/" . $pagina . $extencao;
		} else if ($p_ss) {
			$list = mysql_fetch_array($p_s);
			$caminho = "application/view/scripts/{$list[secundario_pasta]}/{$list[secundario_subpasta]}/" . $pagina . $extencao;
		}
	} else if (preg_match("/_imagens/i", $pagina)) {
		// Verifica a exist�ncia de "_imagens" na vari�vel p�gina
		$caminho = "application/view/scripts/acessar_formularios/imagens.php";
	} else if (preg_match("/_imagem_editar/i", $pagina)) {
		// Verifica a exist�ncia de "_imagem_editar" na vari�vel p�gina
		$caminho = "application/view/scripts/acessar_formularios/imagens_editar.php";
	} else {
		$caminho = "application/view/scripts/" . $pagina . $extencao;
	}

	sleep(1);

	if (file_exists($caminho)) {
		include_once($caminho);
	} else {
		include_once($error);
	}

}

?>