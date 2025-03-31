<?php
$Proxima = Functions::seg_($_GET['indice']);
$Totais = $SQL->Consultar("SELECT count(*) AS Total FROM protocolos WHERE _data BETWEEN CURDATE() - INTERVAL 4 MONTH AND CURDATE()");
$Total = mysql_result($Totais, 0, 'Total');
$Paginacao = new Paginacao(40, "protocolos", $Total, $Proxima, 5);
$Limitar = $Paginacao->Limitar();
$Laudo = $SQL->Consultar("SELECT
	protocolo_id,
	_protocolo,
	_paciente,
	_genero,
	_requisitante,
	_senha
 FROM protocolos WHERE _data BETWEEN CURDATE() - INTERVAL 4 MONTH AND CURDATE() ORDER BY protocolo_id DESC LIMIT $Limitar");
$Listar = $Paginacao->Paginar("", "", "", "");
$Lembrete = $Paginacao->Paginar_Inteligente("Exibindo registro #1 a #2 de #3 encontrados");
//$Otimizar = $SQL -> Atualizar("OPTIMIZE TABLE protocolos");
?>
<div id="lembrete"><?php echo $Lembrete; ?><?php echo $Listar; ?></div>
<table id="sorter" class="tablesorter" cellpadding="1">
	<tbody>
		<?php
		$x = 0;
		while ($Laudos = mysql_fetch_array($Laudo)) {
			$y = null;
			if ($x++ % 2 == 0) {
				$y = 'class="odd"';
			}
			?>
			<tr <?php echo $y; ?>>
				<td align="center"><a href="<?php echo LMPaginas::Listar('cadastrar', $Laudos['protocolo_id']); ?>"
						title="Cadastrar Exame para o Protocolo: <?php echo $Laudos['_protocolo']; ?>"><?php echo $Laudos['_protocolo']; ?></a>
				</td>
				<td title="Paciente"><?php echo $Laudos['_paciente']; ?></td>
				<td align="center" title="Sexo"><?php echo $Laudos['_genero']; ?></td>
				<td title="Cl&iacute;nica | Requisitante"><?php echo $Laudos['_requisitante']; ?></td>
				<td align="center" class="codigo" title="Senha de Acesso"><?php echo $Laudos['_senha']; ?></td>
			</tr>
			<?php
		}
		?>
	</tbody>
</table>
<div id="lembrete"><?php echo $Listar; ?></div>