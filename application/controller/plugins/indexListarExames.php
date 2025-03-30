
<script type="text/javascript" src="/library/plugins/thickbox/jquery_thickbox.js"></script>

<?php
	
	function __autoload($classe)
	{
		$pastas = array('filters', 'log', 'plugins');
		foreach ($pastas as $pasta)
		{
			if (file_exists("../{$pasta}/index{$classe}.php"))
			{
				include_once "../{$pasta}/index{$classe}.php";
			}
		}
	}
	
	$SQL = new Connect();
	
	include("indexPaginacao.php");
	
	$Indice      = $_POST['indice'];
	
	$Data        = $_POST['data'];
	
	$Proxima     = $_POST['proxima'];
	
	$Total       = $SQL -> Consultar("SELECT count(*) AS Total FROM tb_laudos_solicitados WHERE solicitado_laudo = '$Indice'");
	
	$Resultado   = mysql_result($Total,0,'Total');
	
	$Paginacao   = new Paginacao(6,"listar",$Resultado,$Proxima,5);
	
	$Limitar     = $Paginacao -> Limitar();
	
	$Solicitado  = $SQL -> Consultar("SELECT * FROM tb_laudos_solicitados WHERE solicitado_laudo = '$Indice' ORDER BY solicitado_id ASC LIMIT {$Limitar}");
	
	$Lembrete = $Paginacao -> Paginar_Inteligente("Exibindo exames #1 a #2 de #3 encontrados");
	
	$Paginar     = $Paginacao -> Paginar("","","","");
	
	$Solicitados = mysql_num_rows($Solicitado);
	
	$Numero      = 1;

?>

<table class="tablesorter" cellpadding="1">

<thead>
	<tr>
	<th width="30%" scope="col" align="center"><a href="exames" tabela="cadastrarExame" indice="<?php echo $Indice;?>" data="<?php echo $Data;?>" title="Solicitar Laudos">Exames</a></th>
	<th width="50%" scope="col" align="center"><a href="exames" tabela="cadastrarExame" indice="<?php echo $Indice;?>" data="<?php echo $Data;?>" title="Solicitar Laudos">Titulos</a></th>
	<th width="10%" scope="col" align="center">Valor</th>
	<th width="10%" scope="col" align="center">Excluir</th>
	</tr>
</thead>

<tfoot>
	<tr>
	<th width="30%" scope="col" align="center"><a href="exames" tabela="cadastrarExame" indice="<?php echo $Indice;?>" data="<?php echo $Data;?>" title="Solicitar Laudos">Exames</a></th>
	<th width="50%" scope="col" align="center"><a href="exames" tabela="cadastrarExame" indice="<?php echo $Indice;?>" data="<?php echo $Data;?>" title="Solicitar Laudos">Titulos</a></th>
	<th width="10%" scope="col" align="center">Valor</th>
	<th width="10%" scope="col" align="center">Excluir</th>
	</tr>
</tfoot>

<tbody>

<?php
	if($Solicitados)
	{
		echo "<tr>\n";
		echo "<td colspan=\"4\" align=\"center\">$Lembrete</td>\n";
		echo "</tr>\n";
		while($Listar = mysql_fetch_array($Solicitado))
		{
			
			?>
			<tr>
			<td><?php echo $Listar[solicitado_exames];?></td>
			<td><?php echo $Listar[solicitado_titulos];?></td>
			<td align="center">
			<div id="solicitados" indice="<?php echo $Listar[solicitado_id];?>" laudo="<?php echo $Listar[solicitado_laudo];?>" numero="<?php echo $Numero;?>">
			<span id="<?php echo $Numero;?>"><?php echo $Listar[solicitado_valores];?></span>
			</div>
			</td>
			<td align="center">
			<a href="application/controller/filters/indexEdit.php?t_t=tb_laudos_solicitados&amp;c_i=solicitado_id&amp;c_i_v=<?php echo $Listar[solicitado_id];?>&amp;c_t=solicitado_excluir&amp;c_t_v=<?php echo $Listar[solicitado_laudo];?>&amp;TB_iframe=true&amp;modal=true" class="thickbox" title="Excluir Exame"><img src="/public/image/Deletar.jpg" /></a>
			</td>
			</tr>
			<?php
			
			$Numero ++;
			
		}
		echo "<tr>\n";
		echo "<td colspan=\"4\" align=\"center\">$Paginar</td>\n";
		echo "</tr>\n";
	}
	else
	{
		
		?>
		
		<tr>
		<td colspan="4" align="center">Protocolo sem Exames Solicitados.</td>
		</tr>
		
		<?php
	}
?>

</tbody>

</table>