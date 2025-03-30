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
	<th width="55">&nbsp;</th>
	<th width="55">&nbsp;</th>
	<th width="200">&nbsp;</th>
	</tr>
	
	<tr>
	<th colspan="9">&nbsp;</th>
	</tr>
	
	<tr><th align="left"><strong>Protocolo:</strong></th>
	<th colspan="3" align="left"><span class="no_bold"><?php echo $Lista[_protocolo];?></span></th><th colspan="2" align="left"><strong>Solicita&ccedil;&atilde;o:</strong></th>
	<th colspan="3" align="left" class="no_bold"><?php echo $Implode;?></th>
	</tr>
	
	<tr>	<th align="left"><strong>Paciente:</strong></th>
	<th colspan="3" align="left"><span class="no_bold"><?php echo $Lista[_paciente];?></span></th>
<th colspan="2" align="left"><strong>Idade:</strong></th>
	<th colspan="3" align="left" class="no_bold"><?php echo $Lista[_idade];?></th>
	</tr>
	
	<tr>	<th align="left"><strong>Esp&eacute;cie:</strong></th>
	<th colspan="3" align="left"><span class="no_bold"><?php echo $Lista[_especie];?></span></th>
<th colspan="2" align="left"><strong>Sexo:</strong></th>
	<th colspan="3" align="left" class="no_bold"><?php echo $Lista[_genero];?></th>
	</tr>
	
	<tr>	<th align="left"><strong>Ra&ccedil;a:</strong></th>
	<th colspan="3" align="left"><span class="no_bold"><?php echo $Lista[_raca];?></span></th>
<th colspan="2" align="left"><strong>Propriet&aacute;rio:</strong></th>
	<th colspan="3" align="left" class="no_bold"><?php echo $Lista[_proprietario];?></th>
	</tr>
	
	<tr>	<th align="left"><strong>Cl&iacute;nica:</strong></th>
	<th colspan="3" align="left"><span class="no_bold"><?php echo $Lista[_clinica_titulo];?></span></th>
<th colspan="2" align="left"><strong>Dr(a).:</strong></th>
	<th colspan="3" align="left" class="no_bold"><?php echo $Lista[_requisitante];?></th>
	</tr>
	
	<tr><th colspan="9">&nbsp;</th></tr>
	
	<tr>
	<th colspan="9">HEMOGRAMA CAPRINO</th>
	</tr>
	
	<tr><th colspan="9">&nbsp;</th></tr>
	
	</thead>
	
	<tfoot>
	
    <tr>
    <th colspan="10" align="right"><img src="http://reports.petimagem.com.br/public/image/assinaturas/danielle.jpg" alt="Dr&ordf; Danielle" title="Drª Danielle Tullio Murad" width="150" height="120" /></th>
    </tr>
    <tr>
      <th colspan="9" align="center" class="textoM">&ldquo;O presente resultado tem seu valor restrito &agrave; amostra examinada neste laborat&oacute;rio .&rdquo;</th>
    </tr>
	<tr>
	<th colspan="9">&nbsp;</th>
    </tr>
	<tr>
    <th colspan="9" align="justify" class="textoM">&ldquo;Qualquer teste e/ou exame laboratorial depende da  an&aacute;lise conjunta do seu resultado e dos dados cl&iacute;nicos. Eventualmente,  resultados discordantes podem ocorrer por interfer&ecirc;ncias fisiol&oacute;gicas,  farmacol&oacute;gicas, de acondicionamento e envio das amostras. Em caso de d&uacute;vida,  solicitamos, ao M&eacute;dico Veterin&aacute;rio, contatar com o M&eacute;dico Veterin&aacute;rio Patologista  respons&aacute;vel.&rdquo;</th>
    </tr>
	
	</tfoot>
	
    <!-- xxxxxxxxxx Conteudo xxxxxxxxxx -->
    <tbody>
    
	<tr>
	<td class="textoM"><strong>M&eacute;todo:</strong></td>
	<td colspan="8" class="textoM"><em>Autom&aacute;tico Celm 530</em></td>
	</tr>
	<?php
	if (
		$listar[_hemaceas]        != 'Meketrefe' || 
		$listar[_hemoglobina]     != 'Meketrefe' || 
		$listar[_hematocrito]     != 'Meketrefe' || 
		$listar[_vcm]             != 'Meketrefe' || 
		$listar[_hcm]             != 'Meketrefe' || 
		$listar[_chcm]            != 'Meketrefe'
		)
	{
	?>
		<tr>
		<td colspan="4"><strong>ERITROGRAMA</strong></td>
		<td colspan="3" align="center" class="textoM"><strong>Valores de Refer&ecirc;ncia</strong></td>
		<td colspan="2">&nbsp;</td>
		</tr>
		<?php
		if ($listar[_hemaceas] != 'Meketrefe')
		{
		?>
			<tr>
			<td align="left">&nbsp;</td>
			<td align="left"><strong>Hem&aacute;cias:</strong></td>
			<td align="left"><strong><?php echo $listar[_hemaceas];?></strong></td>
			<td align="left"><strong>milh&otilde;es/uL</strong></td>
			<td colspan="3" align="center" class="textoM">8 a 18</td>
			<td colspan="2">&nbsp;</td>
			</tr>
		<?php
		}
		if ($listar[_hemoglobina] != 'Meketrefe')
		{
		?>
			<tr>
			<td align="left">&nbsp;</td>
			<td align="left"><strong>Hemoglobina:</strong></td>
			<td align="left"><strong><?php echo $listar[_hemoglobina];?></strong></td>
			<td align="left"><strong>g/dL</strong></td>
			<td colspan="3" align="center" class="textoM">8 a 12</td>
			<td colspan="2">&nbsp;</td>
			</tr>
		<?php
		}
		if ($listar[_hematocrito] != 'Meketrefe')
		{
		?>
			<tr>
			<td align="left">&nbsp;</td>
			<td align="left"><strong>Hemat&oacute;crito:</strong></td>
			<td align="left"><strong><?php echo $listar[_hematocrito];?></strong></td>
			<td align="left"><strong>%</strong></td>
			<td colspan="3" align="center" class="textoM">22 a 38</td>
			<td colspan="2">&nbsp;</td>
			</tr>
		<?php
		}
		if ($listar[_vcm] != 'Meketrefe')
		{
		?>
			<tr>
			<td align="left">&nbsp;</td>
			<td align="left"><strong>V.C.M.:</strong></td>
			<td align="left"><strong><?php echo $listar[_vcm];?></strong></td>
			<td align="left"><strong>fl</strong></td>
			<td colspan="3" align="center" class="textoM">16 a 25</td>
			<td colspan="2">&nbsp;</td>
			</tr>
		<?php
		}
		if ($listar[_hcm] != 'Meketrefe')
		{
		?>
			<tr>
			<td align="left">&nbsp;</td>
			<td align="left"><strong>H.C.M.:</strong></td>
			<td align="left"><strong><?php echo $listar[_hcm];?></strong></td>
			<td align="left"><strong>pg</strong></td>
			<td colspan="3" align="center" class="textoM">5,2 a 8</td>
			<td colspan="2">&nbsp;</td>
			</tr>
		<?php
		}
		if ($listar[_chcm] != 'Meketrefe')
		{
		?>
			<tr>
			<td align="left">&nbsp;</td>
			<td align="left"><strong>C.H.C.M.:</strong></td>
			<td align="left"><strong><?php echo $listar[_chcm];?></strong></td>
			<td align="left"><strong>%</strong></td>
			<td colspan="3" align="center" class="textoM">30 a 36</td>
			<td colspan="2">&nbsp;</td>
			</tr>
		<?php
		}
	}
	if (
		$listar[_leucocitos]         != 'Meketrefe' || 
		$listar[_eosinofilos_a]      != 'Meketrefe' || 
		$listar[_linfocitos_a]       != 'Meketrefe' || 
		$listar[_monocitos_a]        != 'Meketrefe' || 
		$listar[_bastonetes_a]       != 'Meketrefe' || 
		$listar[_segmentados_a]      != 'Meketrefe' || 
		$listar[_basofilos]          != 'Meketrefe' || 
		$listar[_outros]             != 'Meketrefe' || 
		$listar[_proteina_plasmatica]!= 'Meketrefe' || 
		$listar[_fibrogenio]         != 'Meketrefe'
		)
	{
	?>
		<tr><td colspan="9">&nbsp;</td></tr>
		<tr>
        <td colspan="4"><strong>LEUCOGRAMA</strong></td>
		<td colspan="3" align="center" class="textoM"><strong>Valores de Refer&ecirc;ncia</strong></td>
		<td colspan="2">&nbsp;</td>
		</tr>
		<?php
		if ($listar[_leucocitos] != 'Meketrefe')
		{
		?>
			<tr>
			<td align="left">&nbsp;</td>
			<td align="left"><strong>Leuc&oacute;citos Totais:</strong></td>
			<td align="left"><strong><?php echo $listar[_leucocitos];?></strong></td>
			<td align="left"><strong><em>/mm3</em></strong></td>
			<td colspan="3" align="center" class="textoM">4.000 a 13.000</td>
			<td colspan="2">&nbsp;</td>
			</tr>
			<tr>
			<td colspan="2" align="left" valign="top">&nbsp;</td>
			<td align="center" valign="top"><strong>Absoluto</strong></td>
			<td align="center" valign="top"><strong>Relativo</strong></td>
			<td colspan="5" align="left" valign="top">&nbsp;</td>
			</tr>
			<?php
			if ($listar[_eosinofilos_a] != 'Meketrefe')
			{
			?>
				<tr>
				<td align="left">&nbsp;</td>
				<td align="left"><strong>Eosin&oacute;filos:</strong></td>
				<td align="left"><strong><?php echo $listar[_eosinofilos_a];?></strong></td>
				<td align="left"><strong><?php echo $listar[_eosinofilos_r];?></strong></td>
				<td colspan="3" align="center" class="textoM">50 a 650</td>
				<td colspan="2">&nbsp;</td>
				</tr>
			<?php
			}
			if ($listar[_linfocitos_a] != 'Meketrefe')
			{
			?>
				<tr>
				<td align="left">&nbsp;</td>
				<td align="left"><strong>Linf&oacute;citos:</strong></td>
				<td align="left"><strong><?php echo $listar[_linfocitos_a];?></strong></td>
				<td align="left"><strong><?php echo $listar[_linfocitos_r];?></strong></td>
				<td colspan="3" align="center" class="textoM">2.000 a 9.000</td>
				<td colspan="2">&nbsp;</td>
				</tr>
			<?php
			}
			if ($listar[_monocitos_a] != 'Meketrefe')
			{
			?>
				<tr>
				<td align="left">&nbsp;</td>
				<td align="left"><strong>Mon&oacute;citos:</strong></td>
				<td align="left"><strong><?php echo $listar[_monocitos_a];?></strong></td>
				<td align="left"><strong><?php echo $listar[_monocitos_r];?></strong></td>
				<td colspan="3" align="center" class="textoM">0 a 550</td>
				<td colspan="2">&nbsp;</td>
				</tr>
			<?php
			}
			if ($listar[_bastonetes_a] != 'Meketrefe')
			{
			?>
				<tr>
				<td align="left">&nbsp;</td>
				<td align="left"><strong>Bastonetes:</strong></td>
				<td align="left"><strong><?php echo $listar[_bastonetes_a];?></strong></td>
				<td align="left"><strong><?php echo $listar[_bastonetes_r];?></strong></td>
				<td colspan="3" align="center" class="textoM">Raros</td>
				<td colspan="2">&nbsp;</td>
				</tr>
			<?php
			}
			if ($listar[_segmentados_a] != 'Meketrefe')
			{
			?>
				<tr>
				<td align="left">&nbsp;</td>
				<td align="left"><strong>Segmentados:</strong></td>
				<td align="left"><strong><?php echo $listar[_segmentados_a];?></strong></td>
				<td align="left"><strong><?php echo $listar[_segmentados_r];?></strong></td>
				<td colspan="3" align="center" class="textoM">1.200 a 7.200</td>
				<td colspan="2">&nbsp;</td>
				</tr>
			<?php
			}
			}
			if ($listar[_basofilos_a] != 'Meketrefe')
			{
			?>
				<tr>
				<td align="left">&nbsp;</td>
				<td align="left"><strong>Bas&oacute;filos:</strong></td>
				<td align="left"><strong><?php echo $listar[_basofilos_a];?></strong></td>
				<td align="left"><strong><?php echo $listar[_basofilos_r];?></strong></td>
				<td colspan="3" align="center" class="textoM">0 a 300</td>
				<td colspan="2">&nbsp;</td>
				</tr>
			<?php
			}
			if ($listar[_outros] != 'Meketrefe')
			{
			?>
				<tr>
				<td align="left">&nbsp;</td>
				<td align="left"><strong><?php echo $listar[_outros];?>:</strong></td>
				<td align="left"><strong><?php echo $listar[_outros_a];?></strong></td>
				<td align="left"><strong><?php echo $listar[_outros_r];?></strong></td>
				<td colspan="3" align="center" class="textoM"><?php echo $listar[_outros_n_a];?></td>
				<td colspan="2">&nbsp;</td>
				</tr>
			<?php
			}
		}
		if($listar[_proteina_plasmatica] != 'Meketrefe')
		{
		?>
			<tr><td colspan="9">&nbsp;</td></tr>
			<tr>
			<td>&nbsp;</td>
			<td><strong>Prote&iacute;na plasm&aacute;tica:</strong> </td>
			<td><strong><?php echo $listar[_proteina_plasmatica];?></strong></td>
			<td><strong>g/dL</strong></td>
			<td colspan="3" align="center" class="textoM">6,0 a 7,5</td>
			<td colspan="2">&nbsp;</td>
			</tr>
		<?php
		}
		if($listar[_fibrogenio] != 'Meketrefe')
		{
		?>
			<tr>
			<td>&nbsp;</td>
			<td><strong>Fibrog&ecirc;nio:</strong></td>
			<td><strong><?php echo $listar[_fibrogenio];?></strong></td>
			<td><strong>g/dL</strong></td>
			<td colspan="3" align="center" class="textoM">100 a 500</td>
			<td colspan="2">&nbsp;</td>
			</tr>
		<?php
		}
	if ($listar[_observacao] != 'Meketrefe')
	{
	?>
		<tr><td colspan="9">&nbsp;</td></tr>
		<tr>
		<td colspan="9"><strong>Observa&ccedil;&atilde;o:</strong></td>
		</tr>
		<tr>
		<td colspan="9" align="justify"><?php echo nl2br($listar[_observacao]);?></td>
		</tr>
		<tr>
		<td colspan="9">&nbsp;</td>
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
