<div class="corpo">
	
	<div class="cabecalho"></div>
	
	<div class="conteudo">
	
	<!-- Laudo -->
	
	<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
	
	<table width="840" border="0" cellpadding="0" cellspacing="0">
	
	<thead>
	
	<tr>
	<th width="105">&nbsp;</th>
	<th width="150">&nbsp;</th>
	<th width="60">&nbsp;</th>
	<th width="105">&nbsp;</th>
	<th width="75">&nbsp;</th>
	<th width="35">&nbsp;</th>
	<th width="110">&nbsp;</th>
	<th width="200">&nbsp;</th>
	</tr>
	
	<tr>
	<th colspan="8">&nbsp;</th>
	</tr>
	
	<tr><th align="left"><strong>Protocolo:</strong></th>
	<th colspan="3" align="left"><span class="no_bold"><?php echo $Lista[_protocolo];?></span></th><th colspan="2" align="left"><strong>Solicita&ccedil;&atilde;o:</strong></th>
	<th colspan="2" align="left" class="no_bold"><?php echo $Implode;?></th>
	</tr>
	
	<tr>	<th align="left"><strong>Paciente:</strong></th>
	<th colspan="3" align="left"><span class="no_bold"><?php echo $Lista[_paciente];?></span></th>
<th colspan="2" align="left"><strong>Idade:</strong></th>
	<th colspan="2" align="left" class="no_bold"><?php echo $Lista[_idade];?></th>
	</tr>
	
	<tr>	<th align="left"><strong>Esp&eacute;cie:</strong></th>
	<th colspan="3" align="left"><span class="no_bold"><?php echo $Lista[_especie];?></span></th>
<th colspan="2" align="left"><strong>Sexo:</strong></th>
	<th colspan="2" align="left" class="no_bold"><?php echo $Lista[_genero];?></th>
	</tr>
	
	<tr>	<th align="left"><strong>Ra&ccedil;a:</strong></th>
	<th colspan="3" align="left"><span class="no_bold"><?php echo $Lista[_raca];?></span></th>
<th colspan="2" align="left"><strong>Propriet&aacute;rio:</strong></th>
	<th colspan="2" align="left" class="no_bold"><?php echo $Lista[_proprietario];?></th>
	</tr>
	
	<tr>	<th align="left"><strong>Cl&iacute;nica:</strong></th>
	<th colspan="3" align="left"><span class="no_bold"><?php echo $Lista[_clinica_titulo];?></span></th>
<th colspan="2" align="left"><strong>Dr(a).:</strong></th>
	<th colspan="2" align="left" class="no_bold"><?php echo $Lista[_requisitante];?></th>
	</tr>
	
	<tr><th colspan="8">&nbsp;</th></tr>
	
	<tr>
	<th colspan="8">CITOLOGIA VAGINAL</th>
	</tr>
	
	<tr><th colspan="8">&nbsp;</th></tr>
	
	</thead>
	
	<tfoot>
	
	<tr>
    <th colspan="8">&nbsp;</th>
    </tr>
	<tr>
	<th colspan="8" align="right"><img src="http://reports.petimagem.com.br/public/image/assinaturas/danielle.jpg" alt="Dr&ordf; Danielle" title="Drª Danielle Tullio Murad" width="150" height="120" /></th>
    </tr>
    <tr>
      <th colspan="8" align="center" class="textoM">
        &ldquo;O presente resultado tem seu valor restrito &agrave; amostra examinada neste laborat&oacute;rio .&rdquo;	</th>
    </tr>
	<tr><th colspan="8">&nbsp;</th></tr>
	
	</tfoot>
	
    <!-- xxxxxxxxxx Conteudo xxxxxxxxxx -->
    <tbody>
    
	<?php
        /*
	if($listar[_codigo] != 'Meketrefe')
	{
	?>
		<tr>
		<td width="60"><strong>C&oacute;digo</strong></td>
		<td colspan="7"><?php echo $listar[_codigo];?></td>
		</tr>
                <tr>
                <td colspan="8">&nbsp;</td>
                </tr>
	<?php
	}
        */
	if($listar[_amostra] != 'Meketrefe')
	{
	?>
            <tr>
		<td width="80"><strong>Amostra</strong></td>
                <td colspan="7"><strong><em>Citologia vaginal</em> &nbsp; </strong><?php echo $listar[_amostra];?></td>
            </tr>
            <tr>
                <td colspan="8">&nbsp;</td>
            </tr>
	<?php
        }
	if(
		$listar[_epiteliais_queratinizadas] != 'Meketrefe' || 
		$listar[_epiteliais_queratinizadas_n] != 'Meketrefe' || 
		$listar[_eritrocitos] != 'Meketrefe' || 
		$listar[_bacterias] != 'Meketrefe' || 
		$listar[_leucocitos] != 'Meketrefe' || 
		$listar[_em_branco] != 'Meketrefe'
	)
	{
		if($listar[_epiteliais_queratinizadas] != 'Meketrefe')
		{
		?>
		<tr>
		  <td colspan="3"><strong>C&eacute;lulas epiteliais queratinizadas</strong></td>
		  <td colspan="2"><?php echo $listar[_epiteliais_queratinizadas];?></td>
		  <td colspan="2">&nbsp;</td>
		</tr>
		<?php
		}
		if($listar[_epiteliais_queratinizadas_n] != 'Meketrefe')
		{
		?>
		<tr>
		  <td colspan="3"><strong>C&eacute;lulas epiteliais n&atilde;o queratinizadas</strong></td>
		  <td colspan="2"><?php echo $listar[_epiteliais_queratinizadas_n];?></td>
		  <td colspan="2">&nbsp;</td>
		  </tr>
		<?php
		}
		if($listar[_eritrocitos] != 'Meketrefe')
		{
		?>
		<tr>
		  <td colspan="2"><strong>Eritr&oacute;citos</strong></td>
		  <td colspan="2"><?php echo $listar[_eritrocitos];?></td>
		  <td colspan="3">&nbsp;</td>
		</tr>
		<?php
		}
		if($listar[_bacterias] != 'Meketrefe')
		{
		?>
		<tr>
		  <td colspan="2"><strong>Bact&eacute;ias</strong></td>
		  <td colspan="2"><?php echo $listar[_bacterias];?></td>
		  <td colspan="3">&nbsp;</td>
		</tr>
		<?php
		}
		if($listar[_leucocitos] != 'Meketrefe')
		{
		?>
		<tr>
		  <td colspan="2"><strong>Leuc&oacute;citos</strong></td>
		  <td colspan="2"><?php echo $listar[_leucocitos];?></td>
		  <td colspan="3">&nbsp;</td>
		</tr>
		<?php
		}
		if($listar[_em_branco] != 'Meketrefe')
		{
		?>
		<tr>
		  <td colspan="2"><?php echo $listar[_em_branco];?></td>
		  <td><?php echo $listar[_em_branco_a];?></td>
		  <td colspan="5">&nbsp;</td>
		</tr>
		<?php
		}
		?>
		<tr>
			<td colspan="8">&nbsp;</td>
		</tr>
		<?php
	}
	if($listar[_diagnostico] != 'Meketrefe')
	{
	?>
		<tr>
		<td colspan="8"><strong>Diagn&oacute;stico(s)</strong></td>
		</tr>
		<tr>
		<td colspan="8" align="justify">
		<?php echo nl2br($listar[_diagnostico]);?></td>
		</tr>
	<?php
	}
	?>
    
    </tbody>
    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
	
	</table>
	
	<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
    
</div>
	
	<div class="rodape">
	
	<strong><?php echo 'Curitiba, ' . Functions::dia_da_semana() . ' ' . date('d') . ' de ' . Functions::retorna_mes(date('n')) . ' de ' . date('Y');?></strong>
	
	</div>
	
</div>

<div class="ppagina"></div>

<?php

$imagem   = $SQL -> Consultar("SELECT * FROM tb_imagens WHERE imagem_citopatologia_vaginal = '{$listar[_id]}'");

$imagens = mysql_num_rows($imagem);

if($imagens)
{
?>

<div class="corpo">
	
	<div class="cabecalho"></div>
	
	<div class="conteudo">
	
	<!-- Laudo -->
	
	<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
	
	<table width="840" border="0" cellpadding="0" cellspacing="0">
	
	<thead>
	
	<tr>
	<th width="105">&nbsp;</th>
	<th width="150">&nbsp;</th>
	<th width="60">&nbsp;</th>
	<th width="105">&nbsp;</th>
	<th width="75">&nbsp;</th>
	<th width="35">&nbsp;</th>
	<th width="110">&nbsp;</th>
	<th width="200">&nbsp;</th>
	</tr>
	
	<tr>
	<th colspan="8">&nbsp;</th>
	</tr>
	
	<tr><th align="left"><strong>Protocolo:</strong></th>
	<th colspan="3" align="left"><span class="no_bold"><?php echo $Lista[_protocolo];?></span></th><th colspan="2" align="left"><strong>Solicita&ccedil;&atilde;o:</strong></th>
	<th colspan="2" align="left" class="no_bold"><?php echo $Implode;?></th>
	</tr>
	
	<tr>	<th align="left"><strong>Paciente:</strong></th>
	<th colspan="3" align="left"><span class="no_bold"><?php echo $Lista[_paciente];?></span></th>
<th colspan="2" align="left"><strong>Idade:</strong></th>
	<th colspan="2" align="left" class="no_bold"><?php echo $Lista[_idade];?></th>
	</tr>
	
	<tr>	<th align="left"><strong>Esp&eacute;cie:</strong></th>
	<th colspan="3" align="left"><span class="no_bold"><?php echo $Lista[_especie];?></span></th>
<th colspan="2" align="left"><strong>Sexo:</strong></th>
	<th colspan="2" align="left" class="no_bold"><?php echo $Lista[_genero];?></th>
	</tr>
	
	<tr>	<th align="left"><strong>Ra&ccedil;a:</strong></th>
	<th colspan="3" align="left"><span class="no_bold"><?php echo $Lista[_raca];?></span></th>
<th colspan="2" align="left"><strong>Propriet&aacute;rio:</strong></th>
	<th colspan="2" align="left" class="no_bold"><?php echo $Lista[_proprietario];?></th>
	</tr>
	
	<tr>	<th align="left"><strong>Cl&iacute;nica:</strong></th>
	<th colspan="3" align="left"><span class="no_bold"><?php echo $Lista[_clinica_titulo];?></span></th>
<th colspan="2" align="left"><strong>Dr(a).:</strong></th>
	<th colspan="2" align="left" class="no_bold"><?php echo $Lista[_requisitante];?></th>
	</tr>
	
	<tr><th colspan="8">&nbsp;</th></tr>
	
	<tr>
	<th colspan="8">CITOLOGIA VAGINAL IMAGENS</th>
	</tr>
	
	<tr><th colspan="8">&nbsp;</th></tr>
	
	</thead>
	
	<tfoot>
	
	<tr>
    <th colspan="8">&nbsp;</th>
    </tr>
	<tr>
	<th colspan="8" align="right"><img src="http://reports.petimagem.com.br/public/image/assinaturas/danielle.jpg" alt="Dr&ordf; Danielle" title="Drª Danielle Tullio Murad" width="150" height="120" /></th>
    </tr>
    <tr>
      <th colspan="8" align="center" class="textoM">
        &ldquo;O presente resultado tem seu valor restrito &agrave; amostra examinada neste laborat&oacute;rio .&rdquo;	</th>
    </tr>
	<tr><th colspan="8">&nbsp;</th></tr>
	
	</tfoot>
	
    <!-- xxxxxxxxxx Conteudo xxxxxxxxxx -->
    <tbody>
    
    <?php
	$x = 0;
	echo "<tr class=\"img_listar\">\n";
	while($imagens = mysql_fetch_array($imagem))
	{
		echo "\t<td colspan=\"4\" class=\"img_agrupar\">\n";
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
    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
	
	</table>
	
	<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
    
</div>
	
	<div class="rodape">
	
	<strong><?php echo 'Curitiba, ' . Functions::dia_da_semana() . ' ' . date('d') . ' de ' . Functions::retorna_mes(date('n')) . ' de ' . date('Y');?></strong>
	
	</div>
	
</div>

<?php
}
?>