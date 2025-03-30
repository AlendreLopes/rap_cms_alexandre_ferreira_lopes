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
	<th colspan="8">L&Iacute;QUIDO CEFALORRAQUIDIANO</th>
	</tr>
	
	<tr><th colspan="8"><strong>An&aacute;lise de rotina</strong></th></tr>
	
	</thead>
	
	<tfoot>
	
	<tr>
    <th colspan="8" align="right"><img src="http://reports.petimagem.com.br/public/image/assinaturas/danielle.jpg" alt="Dr&ordf; Danielle" title="Drª Danielle Tullio Murad" width="150" height="120" /></th>
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
		$listar[_volume]   != 'Meketrefe' || 
		$listar[_cor]      != 'Meketrefe' || 
		$listar[_aspecto]  != 'Meketrefe' || 
		$listar[_odor]     != 'Meketrefe' || 
		$listar[_densidade]!= 'Meketrefe' || 
		$listar[_sedimento]!= 'Meketrefe' || 
		$listar[_cor_sobrenadante]     != 'Meketrefe'
		)
		{
		?>
			<tr><td colspan="8">&nbsp;</td></tr>
			<tr>
			<td colspan="8"><strong>Exame F&iacute;sico:</strong></td>
			</tr>
			<?php
			if ($listar[_volume] != 'Meketrefe')
			{
			?>
			<tr>
			<td>&nbsp;</td>
			<td><strong>Volume:</strong></td>
			<td><?php echo $listar[_volume]; ?></td>
			<td colspan="5"><strong>ml</strong></td>
			</tr>
			<?php
			}
			if ($listar[_cor] != 'Meketrefe')
			{
			?>
			<tr>
			<td>&nbsp;</td>
			<td><strong>Cor:</strong></td>
			<td colspan="6"><?php echo $listar[_cor]; ?></td>
			</tr>
			<?php
			}
			if ($listar[_aspecto] != 'Meketrefe')
			{
			?>
			<tr>
			<td>&nbsp;</td>
			<td><strong>Aspecto:</strong></td>
			<td colspan="6"><?php echo $listar[_aspecto]; ?></td>
			</tr>
			<?php
			}
			if ($listar[_odor] != 'Meketrefe')
			{
			?>
			<tr>
			<td>&nbsp;</td>
			<td><strong>Odor:</strong></td>
			<td colspan="6"><?php echo $listar[_odor]; ?></td>
			</tr>
			<?php
			}
			if ($listar[_densidade] != 'Meketrefe')
			{
			?>
			<tr>
			<td>&nbsp;</td>
			<td><strong>Densidade:</strong></td>
			<td colspan="6"><?php echo $listar[_densidade]; ?></td>
			</tr>
			<?php
			}
			if ($listar[_sedimento] != 'Meketrefe')
			{
			?>
			<tr>
			<td>&nbsp;</td>
			<td><strong>Sedimento:</strong>&nbsp;&nbsp;</td>
			<td colspan="6"><?php echo $listar[_sedimento]; ?></td>
			</tr>
			<?php
			}
			if ($listar[_cor_sobrenadante] != 'Meketrefe')
			{
			?>
			<tr>
			<td>&nbsp;</td>
			<td colspan="7"><strong>Cor do sobrenadante:</strong></td>
			</tr>
			<tr>
			<td>&nbsp;</td>
			<td colspan="7"><?php echo $listar[_cor_sobrenadante]; ?></td>
			</tr>
		<?php
			}
		}
		if (
			$listar[_celulas_nucleadas]     != 'Meketrefe' || 
			$listar[_eritrocitos] != 'Meketrefe' || 
			$listar[_contagem_diferencial]!= 'Meketrefe' || 
			$listar[_glicose]     != 'Meketrefe'
			)
			{
			?>
			<tr><td colspan="8">&nbsp;</td></tr>
			<tr>
			<td colspan="8"><strong>Exame Citol&oacute;gico:</strong></td>
			</tr>
			<?php
			if ($listar[_celulas_nucleadas] != 'Meketrefe')
			{
			?>
			<tr>
			<td>&nbsp;</td>
			<td><strong>C&eacute;lulas nucleadas:</strong></td>
			<td><?php echo $listar[_celulas_nucleadas]; ?></td>
			<td colspan="5"> <strong>/mm3</strong></td>
			</tr>
			<?php
			}
			if ($listar[_eritrocitos] != 'Meketrefe')
			{
			?>
			<tr>
			<td>&nbsp;</td>
			<td><strong>Eritr&oacute;citos:</strong></td>
			<td><?php echo $listar[_eritrocitos]; ?></td>
			<td colspan="5"><strong>/mm3</strong></td>
			</tr>
			<?php
			}
			if ($listar[_contagem_diferencial] != 'Meketrefe')
			{
			?>
			<tr>
			<td>&nbsp;</td>
			<td colspan="7"><strong>Contagem diferencial:</strong>&nbsp;&nbsp;</td>
			</tr>
			<tr>
			<td>&nbsp;</td>
			<td colspan="7"><?php echo nl2br($listar[_contagem_diferencial]); ?></td>
			</tr>
		<?php
			}
		}
	if (
		$listar[_glicose]   != 'Meketrefe' || 
		$listar[_ph]        != 'Meketrefe' || 
		$listar[_proteinas] != 'Meketrefe' || 
		$listar[_sangue_oculto]   != 'Meketrefe' || 
		$listar[_coagulo]   != 'Meketrefe' || 
		$listar[_amilase]   != 'Meketrefe'
		)
		{
		?>
            <tr><td colspan="8">&nbsp;</td></tr>
			<tr>
			<td colspan="8"><strong>Exame Quimico:</strong></td>
			</tr>
			<?php
			if ($listar[_glicose] != 'Meketrefe')
			{
			?>
			<tr>
			<td>&nbsp;</td>
			<td><strong>Glicose:</strong></td>
			<td><?php echo $listar[_glicose]; ?></td>
			<td colspan="5"><strong>mg/dL</strong></td>
			</tr>
			<?php
			}
			if ($listar[_ph] != 'Meketrefe')
			{
			?>
			<tr>
			<td>&nbsp;</td>
			<td><strong>pH:</strong></td>
			<td colspan="6"><?php echo $listar[_ph]; ?></td>
			</tr>
			<?php
			}
			if ($listar[_proteinas] != 'Meketrefe')
			{
			?>
			<tr>
			<td>&nbsp;</td>
			<td><strong>Prote&iacute;nas:</strong></td>
			<td><?php echo $listar[_proteinas]; ?></td>
			<td colspan="5"><strong>g/dL</strong></td>
			</tr>
			<?php
			}
			if ($listar[_sangue_oculto] != 'Meketrefe')
			{
			?>
			<tr>
			<td>&nbsp;</td>
			<td><strong>Sangue Oculto :</strong></td>
			<td colspan="6"><?php echo $listar[_sangue_oculto]; ?></td>
			</tr>
			<?php
			}
			if ($listar[_coagulo] != 'Meketrefe')
			{
			?>
			<tr>
			<td>&nbsp;</td>
			<td><strong>Co&aacute;gulo:</strong></td>
			<td colspan="6"><?php echo $listar[_coagulo]; ?></td>
			</tr>
			<?php
			}
			if ($listar[_amilase] != 'Meketrefe')
			{
			?>
			<tr>
			<td>&nbsp;</td>
			<td><strong>Globulinas:</strong></td>
			<td colspan="6"><?php echo $listar[_globulinas]; ?></td>
			</tr>
		<?php
			}
		}
	if ($listar[_observacao] != 'Meketrefe')
	{
		?>
		<tr><td colspan="8">&nbsp;</td></tr>
		<tr>
		<td colspan="8"><strong>Observa&ccedil;&atilde;o:</strong></td>
		</tr>
		<tr>
		<td colspan="8" align="justify"><?php echo nl2br($listar[_observacao]); ?></td>
		</tr>
		<tr>
		<td colspan="8">&nbsp;</td>
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
