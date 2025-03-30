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
	<th width="85">&nbsp;</th>
	<th width="80">&nbsp;</th>
	<th width="110">&nbsp;</th>
	<th width="110">&nbsp;</th>
	<th width="200">&nbsp;</th>
	</tr>
	
	<tr>
	<th colspan="8">&nbsp;</th>
	</tr>
	
	<tr><th align="left"><strong>Protocolo:</strong></th>
	<th colspan="3" align="left"><span class="no_bold"><?php echo $Lista[_protocolo];?></span></th><th align="left"><strong>Solicita&ccedil;&atilde;o:</strong></th>
	<th colspan="3" align="left"><?php echo $Implode;?></th>
	</tr>
	
	<tr>
	<th align="left"><strong>Paciente:</strong></th>
	<th colspan="3" align="left"><span class="no_bold"><?php echo $Lista[_paciente];?></span></th>
	<th align="left"><strong>Idade:</strong></th>
	<th colspan="3" align="left"><?php echo $Lista[_idade];?></th>
	</tr>
	
	<tr>
	<th align="left"><strong>Esp&eacute;cie:</strong></th>
	<th colspan="3" align="left"><span class="no_bold"><?php echo $Lista[_especie];?></span></th>
	<th align="left"><strong>Sexo:</strong></th>
	<th colspan="3" align="left"><?php echo $Lista[_genero];?></th>
	</tr>
	
	<tr>
	<th align="left"><strong>Ra&ccedil;a:</strong></th>
	<th colspan="3" align="left"><span class="no_bold"><?php echo $Lista[_raca];?></span></th>
	<th align="left"><strong>Propriet&aacute;rio:</strong></th>
	<th colspan="3" align="left"><?php echo $Lista[_proprietario];?></th>
	</tr>
	
	<tr>
	<th align="left"><strong>Cl&iacute;nica:</strong></th>
	<th colspan="3" align="left"><span class="no_bold"><?php echo $Lista[_clinica_titulo];?></span></th>
	<th align="left"><strong>Dr(a).:</strong></th>
	<th colspan="3" align="left"><?php echo $Lista[_requisitante];?></th>
	</tr>
	
	<tr><th colspan="8">&nbsp;</th></tr>
	
	<tr>
	<th colspan="8">LEUCOGRAMA</th>
	</tr>
	
	<tr><th colspan="8">&nbsp;</th></tr>
	
	</thead>
	
	<tfoot>
	
    <tr>
    <th colspan="10" align="right"><img src="http://reports.petimagem.com.br/public/image/assinaturas/danielle.jpg" alt="Dr&ordf; Danielle" title="Drª Danielle Tullio Murad" width="150" height="120" /></th>
    </tr>
    <tr>
      <th colspan="8" align="center" class="textoM">&ldquo;O presente resultado tem seu valor restrito &agrave; amostra examinada neste laborat&oacute;rio .&rdquo;</th>
    </tr>
	<tr>
	<th colspan="8">&nbsp;</th>
    </tr>
	<tr>
    <th colspan="8" align="justify" class="textoM">&ldquo;Qualquer teste e/ou exame laboratorial depende da  an&aacute;lise conjunta do seu resultado e dos dados cl&iacute;nicos. Eventualmente,  resultados discordantes podem ocorrer por interfer&ecirc;ncias fisiol&oacute;gicas,  farmacol&oacute;gicas, de acondicionamento e envio das amostras. Em caso de d&uacute;vida,  solicitamos, ao M&eacute;dico Veterin&aacute;rio, contatar com o M&eacute;dico Veterin&aacute;rio Patologista  respons&aacute;vel.&rdquo;</th>
    </tr>
	
	</tfoot>
	
    <!-- xxxxxxxxxx Conteudo xxxxxxxxxx -->
    <tbody>
    
	<?php
	if (
		$listar[_leucocitos]   != 'Meketrefe' || 
		$listar[_eosinofilos_a]!= 'Meketrefe' || 
		$listar[_linfocitos_a] != 'Meketrefe' || 
		$listar[_monocitos_a]  != 'Meketrefe' || 
		$listar[_bastonetes_a] != 'Meketrefe' || 
		$listar[_segmentados_a]!= 'Meketrefe' || 
		$listar[_plaquetas]    != 'Meketrefe'
		)
	{
	?>
        <tr>
        <td class="textoM"><strong>M&eacute;todo:</strong></td>
        <td colspan="7" class="textoM"><em>Autom&aacute;tico Celm 530 e esfrega&ccedil;o corado</em></td>
        </tr>
		<tr>
		<td colspan="4"><strong>LEUCOGRAMA</strong></td>
		<td colspan="2" align="center" class="textoM"><strong>Valores de Refer&ecirc;ncia</strong></td>
		<td colspan="2">&nbsp;</td>
		</tr>
		<?php
		if ($listar[_leucocitos] != 'Meketrefe')
		{
		?>
		<tr>
			<td>&nbsp;</td>
			<td><strong>Leuc&oacute;citos:</strong></td>
			<td><strong><?php echo $listar[_leucocitos];?></strong></td>
			<td><strong><em>/mm3</em></strong></td>
			<td align="center" class="textoM">6.000 a 17.000</td>
			<td align="center" class="textoM">5.000 a 19.000</td>
			<td width="200" align="center">&nbsp;</td>
		</tr>
		<?php
		}
		if (
			$listar[_eosinofilos_a]!= 'Meketrefe' || 
			$listar[_linfocitos_a] != 'Meketrefe' || 
			$listar[_monocitos_a]  != 'Meketrefe' || 
			$listar[_bastonetes_a] != 'Meketrefe' || 
			$listar[_segmentados_a]!= 'Meketrefe' || 
			$listar[_plaquetas]    != 'Meketrefe'
			)
		{
		?>
		<tr>
			<td colspan="2" valign="top">&nbsp;</td>
			<td align="center" valign="top"><strong>Absoluto</strong></td>
			<td align="center" valign="top"><strong>Relativo</strong></td>
			<td colspan="3" valign="top">&nbsp;</td>
		</tr>
		<?php
		}
		if ($listar[_eosinofilos_a] != 'Meketrefe')
		{
		?>
		<tr>
			<td>&nbsp;</td>
			<td><strong>Eosin&oacute;filos:</strong></td>
			<td><strong><?php echo $listar[_eosinofilos_a];?></strong></td>
			<td><strong><?php echo $listar[_eosinofilos_r];?></strong></td>
			<td align="center" class="textoM">0 - 1.700</td>
			<td align="center" class="textoM">0 - 1.700</td>
			<td align="center">&nbsp;</td>
		</tr>
		<?php
		}
		if ($listar[_linfocitos_a] != 'Meketrefe')
		{
		?>
		<tr>
			<td>&nbsp;</td>
			<td><strong>Linf&oacute;citos:</strong></td>
			<td><strong><?php echo $listar[_linfocitos_a];?></strong></td>
			<td><strong><?php echo $listar[_linfocitos_r];?></strong></td>
			<td align="center" class="textoM">720 - 5.100</td>
			<td align="center" class="textoM">720 - 5.100</td>
			<td align="center">&nbsp;</td>
		</tr>
		<?php
		}
		if ($listar[_monocitos_a] != 'Meketrefe')
		{
		?>
		<tr>
			<td>&nbsp;</td>
			<td><strong>Mon&oacute;citos:</strong></td>
			<td><strong><?php echo $listar[_monocitos_a];?></strong></td>
			<td><strong><?php echo $listar[_monocitos_r];?></strong></td>
			<td align="center" class="textoM">180 - 1.700</td>
			<td align="center" class="textoM">180 - 1.700</td>
			<td align="center">&nbsp;</td>
		</tr>
		<?php
		}
		if ($listar[_bastonetes] != 'Meketrefe')
		{
		?>
		<tr>
			<td>&nbsp;</td>
			<td><strong>Bastonetes:</strong></td>
			<td><strong><?php echo $listar[_bastonetes_a];?></strong></td>
			<td><strong><?php echo $listar[_bastonetes_r];?></strong></td>
			<td align="center" class="textoM">0 - 510</td>
			<td align="center" class="textoM">0 - 510</td>
			<td align="center">&nbsp;</td>
		</tr>
		<?php
		}
		if ($listar[_segmentados_a] != 'Meketrefe')
		{
		?>
		<tr>
			<td>&nbsp;</td>
			<td><strong>Segmentados:</strong></td>
			<td><strong><?php echo $listar[_segmentados_a];?></strong></td>
			<td><strong><?php echo $listar[_segmentados_r];?></strong></td>
			<td align="center" class="textoM">3.600 - 13.090</td>
			<td align="center" class="textoM">3.600 - 13.090</td>
			<td align="center">&nbsp;</td>
		</tr>
		<?php
		}
		if ($listar[_basofilos_a] != 'Meketrefe')
		{
		?>
			<tr>
			<td>&nbsp;</td>
			<td><strong>Bas&oacute;filos:</strong></td>
			<td><strong><?php echo $listar[_basofilos_a];?></strong></td>
			<td><strong><?php echo $listar[_basofilos_r];?></strong></td>
			<td align="center" class="textoM">Raros</td>
			<td align="center" class="textoM">Raros </td>
			<td align="center">&nbsp;</td>
			</tr>
		<?php
		}
		if ($listar[_outros] != 'Meketrefe')
		{
		?>
			<tr>
			<td>&nbsp;</td>
			<td><strong><?php echo $listar[_outros];?>:</strong></td>
			<td><strong><?php echo $listar[_outros_a];?></strong></td>
			<td><strong><?php echo $listar[_outros_r];?></strong></td>
			<td align="center" class="textoM"><?php echo $listar[_outros_n_a];?></td>
			<td align="center" class="textoM"><?php echo $listar[_outros_n_b];?></td>
			<td align="center">&nbsp;</td>
			</tr>
		<?php
		}
		?>
		<?php
		if ($listar[_plaquetas] != 'Meketrefe')
		{
		?>
		<tr><td colspan="7">&nbsp;</td></tr>
		<tr>
			<td>&nbsp;</td>
			<td><strong>Plaquetas:</strong></td>
			<td><strong><?php echo $listar[_plaquetas];?></strong></td>
			<td><strong>/mm3</strong></td>
			<td align="center"><span class="textoM">200.000 - 500.000</span></td>
			<td align="center" class="textoM">200.000 - 700.000</td>
			<td align="center">&nbsp;</td>
		</tr>
		<?php
		}
	}
	if ($listar[_observacao] != 'Meketrefe')
	{
		?>
        <tr>
        <td colspan="7">&nbsp;</td>
        </tr>
		<tr>
		<td colspan="7"><strong>Observa&ccedil;&atilde;o:</strong></td>
		</tr>
		<tr>
		<td colspan="7" align="justify"><?php echo nl2br($listar[_observacao]);?></td>
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
