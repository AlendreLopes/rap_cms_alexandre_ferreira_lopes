<div class="corpo">

	<div class="cabecalho"></div>
	
	<div class="conteudo">
	
	<!-- Laudo de Citopatologia -->
	
	<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
	
	<?php include("application/controller/plugins/indexModeloProtocoloImpressao.php");?>
	
	<table width="840" border="0" cellpadding="0" cellspacing="0">
	<tr>
	<td colspan="3">&nbsp;</td>
	</tr>
	<tr>
	<th colspan="3">CITOPATOLOGIA</th>
	</tr>
    
	<tr>
	<td colspan="3">&nbsp;</td>
	</tr>
	<?php
	if($listar[_codigo] != 'Meketrefe')
	{
	?>
		<tr>
		<td><strong>C&oacute;digo</strong></td>
		<td colspan="2"><?php echo $listar[_codigo];?></td>
		</tr>
	<?php
	}
	?>
	<tr>
	<td>&nbsp;</td>
	<td width="60">&nbsp;</td>
	<td width="700">&nbsp;</td>
	</tr>
	<?php
	if($listar[_amostra] != 'Meketrefe')
	{
	?>
		<tr>
		<td width="80"><strong>Amostra</strong></td>
		<td colspan="2"><?php echo $listar[_amostra];?></td>
		</tr>
	<?php
	}
	?>
	<tr>
	<td colspan="3">&nbsp;</td>
	</tr>
	<?php
	if($listar[_exame] != 'Meketrefe')
	{
	?>
	<tr>
		<td colspan="3" align="justify">
		<?php echo nl2br($listar[_exame]);?>
        </td>
	</tr>
	<?php
	}
	?>
	<tr>
	<td colspan="3">&nbsp;</td>
	</tr>
	<?php
	if($listar[_conclusao] != 'Meketrefe')
	{
	?>
		<tr>
		<td colspan="3"><strong>Diagn&oacute;stico(s)</strong></td>
		</tr>
		<tr>
		<td colspan="3" align="justify">
		<?php echo nl2br($listar[_conclusao]);?></td>
		</tr>
	<?php
	}
	?>
	<tr>
	<td colspan="3">&nbsp;</td>
	</tr>
    
	</table>

	<table width="840" border="0" cellpadding="0" cellspacing="0">
	
    <tr>
	<td colspan="2">&nbsp;</td>
	</tr>
	
    <tr>
	<td>&nbsp;</td>
	<td align="right"><img src="http://reports.petimagem.com.br/public/image/assinaturas/silvana.jpg" alt="Dr&ordf; Silvana Cirio" width="150" height="120" /></td>
	</tr>
	
    <tr>
    <td colspan="2" align="center">&nbsp;</td>
    </tr>
	
    <tr>
	<td colspan="2" align="center" class="textoM">&ldquo;O presente resultado tem seu valor restrito &agrave; amostra examinada neste laborat&oacute;rio.&rdquo;</td>
	</tr>
	
    </table>
	
	<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
    
	</div>
	
	<div class="rodape">
	
	<strong><?php echo 'Curitiba, ' . Functions::dia_da_semana() . ' ' . date('d') . ' de ' . Functions::retorna_mes(date('n')) . ' de ' . date('Y');?></strong>
	
	</div>
	
</div>

<div class="ppagina"></div>

<?php

$imagem   = $SQL -> Consultar("SELECT * FROM tb_imagens WHERE imagem_citopatologia = '{$listar[_id]}'");

$imagens = mysql_num_rows($imagem);

if($imagens)
{
?>

<div class="corpo">

	<div class="cabecalho"></div>
	
	<div class="conteudo">
	
	<!-- Imagens do Laudo de Cipatologia -->
	
	<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
	
	<table width="840" border="0" cellpadding="0" cellspacing="0">
    
    <thead>
    
    <tr>
    <th width="105">&nbsp;</th>
    <th width="315">&nbsp;</th>
    <th width="105">&nbsp;</th>
    <th width="315">&nbsp;</th>
    </tr>
    
	<tr>
	<th align="left"><strong>Protocolo:</strong></th>
	<th class="no_bold" align="left"><?php echo $Lista[_protocolo];?></th>
	<th align="left"><strong>Solicita&ccedil;&atilde;o:</strong></th>
	<th align="left" class="no_bold"><?php echo $Implode;?></th>
	</tr>
	
	<tr>
	<th align="left"><strong>Paciente:</strong></th>
	<th class="no_bold" align="left"><?php echo $Lista[_paciente];?></th>
	<th align="left"><strong>Idade:</strong></th>
	<th align="left" class="no_bold"><?php echo $Lista[_idade];?></th>
	</tr>
	
	<tr>
	<th align="left"><strong>Esp&eacute;cie:</strong></th>
	<th class="no_bold" align="left"><?php echo $Lista[_especie];?></th>
	<th align="left"><strong>Sexo:</strong></th>
	<th align="left" class="no_bold"><?php echo $Lista[_genero];?></th>
	</tr>
	
	<tr>
	<th align="left"><strong>Ra&ccedil;a:</strong></th>
	<th class="no_bold" align="left"><?php echo $Lista[_raca];?></th>
	<th align="left"><strong>Propriet&aacute;rio:</strong></th>
	<th align="left" class="no_bold"><?php echo $Lista[_proprietario];?></th>
	</tr>
	
	<tr>
	<th align="left"><strong>Cl&iacute;nica:</strong></th>
	<th class="no_bold" align="left"><?php echo $Lista[_clinica_titulo];?></th>
	<th align="left"><strong>Dr(a).:</strong></th>
	<th align="left" class="no_bold"><?php echo $Lista[_requisitante];?></th>
	</tr>
	
	<tr><th colspan="4">&nbsp;</th></tr>
    
    </thead>
    
    <tfoot>
    
	<tr>
	<th colspan="4" align="right"><img src="http://reports.petimagem.com.br/public/image/assinaturas/silvana.jpg" alt="Dr&ordf; Silvana Cirio" width="150" height="120" /></th>
	</tr>
    
	<tr>
	<th colspan="4" align="center" class="textoM">&ldquo;O presente resultado tem seu valor restrito &agrave; amostra examinada neste laborat&oacute;rio.&rdquo;</th>
	</tr>
    
	<tr>
    <th colspan="4">&nbsp;</th>
    </tr>
    
    </tfoot>
    
    <tbody>
    
    <?php
	$x = 0;
	echo "<tr class=\"img_listar\">\n";
	while($imagens = mysql_fetch_array($imagem))
	{
		echo "\t<td colspan=\"2\" class=\"img_agrupar\">\n";
		echo "<img src=\"http://laudos.petimagem.vegaturbo.com/public/images_e/{$imagens[imagem_imagem]}\" />\n";
		echo "\t<span>".nl2br($imagens[imagem_texto])."</span>\n";
		echo "\t</td>\n";
		if($x ++ % 2 == 1)
		{
			echo "</tr>\n";
		}
	}
	// echo "</tr>\n";
	?>
    
    </tbody>
    
    </table>
	
	<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
	
</div>
	
	<div class="rodape">
	
	<strong><?php echo 'Curitiba, ' . Functions::dia_da_semana() . ' ' . date('d') . ' de ' . Functions::retorna_mes(date('n')) . ' de ' . date('Y');?></strong>
	
	</div>
	
</div>

<div class="ppagina"></div>

<?php
}
?>