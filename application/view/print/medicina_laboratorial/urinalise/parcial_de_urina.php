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
	<th width="110">&nbsp;</th>
	<th width="50">&nbsp;</th>
	<th width="110">&nbsp;</th>
	<th width="75">&nbsp;</th>
	<th width="35">&nbsp;</th>
	<th width="205">&nbsp;</th>
	</tr>
	
	<tr>
	<th colspan="8">&nbsp;</th>
	</tr>
	
	<tr><th align="left"><strong>Protocolo:</strong></th>
	<th colspan="3" align="left"><span class="no_bold"><?php echo $Lista[_protocolo];?></span></th><th align="left"><strong>Solicita&ccedil;&atilde;o:</strong></th>
	<th colspan="3" align="left" class="no_bold"><?php echo $Implode;?></th>
	</tr>
	
	<tr>	<th align="left"><strong>Paciente:</strong></th>
	<th colspan="3" align="left"><span class="no_bold"><?php echo $Lista[_paciente];?></span></th>
<th align="left"><strong>Idade:</strong></th>
	<th colspan="3" align="left" class="no_bold"><?php echo $Lista[_idade];?></th>
	</tr>
	
	<tr>	<th align="left"><strong>Esp&eacute;cie:</strong></th>
	<th colspan="3" align="left"><span class="no_bold"><?php echo $Lista[_especie];?></span></th>
<th align="left"><strong>Sexo:</strong></th>
	<th colspan="3" align="left" class="no_bold"><?php echo $Lista[_genero];?></th>
	</tr>
	
	<tr>	<th align="left"><strong>Ra&ccedil;a:</strong></th>
	<th colspan="3" align="left"><span class="no_bold"><?php echo $Lista[_raca];?></span></th>
<th align="left"><strong>Propriet&aacute;rio:</strong></th>
	<th colspan="3" align="left" class="no_bold"><?php echo $Lista[_proprietario];?></th>
	</tr>
	
	<tr>	<th align="left"><strong>Cl&iacute;nica:</strong></th>
	<th colspan="3" align="left"><span class="no_bold"><?php echo $Lista[_clinica_titulo];?></span></th>
<th align="left"><strong>Dr(a).:</strong></th>
	<th colspan="3" align="left" class="no_bold"><?php echo $Lista[_requisitante];?></th>
	</tr>
	
	<tr><th colspan="8">&nbsp;</th></tr>
	
	<tr>
	<th colspan="8">PARCIAL DE URINA</th>
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
		$listar[_volume]   != 'Meketrefe' || 
		$listar[_densidade]!= 'Meketrefe' || 
		$listar[_aspecto]  != 'Meketrefe' || 
		$listar[_cor]      != 'Meketrefe' || 
		$listar[_ph]       != 'Meketrefe'
		)
	{
		?>
		<tr>
	    <td colspan="4"><strong>Exame F&iacute;sico:</strong></td>
	    <td colspan="3" align="center" class="textoM"><strong>Valores de Refer&ecirc;ncia:</strong></td>
        <td>&nbsp;</td>
	    </tr>
		<?php
		if ($listar[_volume] != 'Meketrefe')
		{
			?>
			<tr>
			<td>&nbsp;</td>
			<td><strong>Volume:</strong></td>
			<td><?php echo $listar[_volume];?></td>
			<td><strong>ml</strong></td>
			<td align="center" class="textoM"><strong>Canino</strong></td>
			<td colspan="2" align="center" class="textoM"><strong>Felino</strong></td>
			<td>&nbsp;</td>
			</tr>
			<?php
		}
		if ($listar[_densidade] != 'Meketrefe')
		{
			?>
			<tr>
			<td>&nbsp;</td>
			<td><strong>Densidade:</strong></td>
			<td colspan="2"><?php echo $listar[_densidade];?></td>
			<td align="center" class="textoM">1,020 a 1,040</td>
			<td colspan="2" align="center" class="textoM">1,020 a 1,060</td>
			<td>&nbsp;</td>
			</tr>
			<?php
		}
		if ($listar[_aspecto] != 'Meketrefe')
		{
			?>
			<tr>
			<td>&nbsp;</td>
			<td><strong>Aspecto:</strong></td>
			<td colspan="2"><?php echo $listar[_aspecto];?></td>
			<td colspan="3">&nbsp;</td>
            <td>&nbsp;</td>
			</tr>
			<?php
		}
		if ($listar[_cor] != 'Meketrefe')
		{
			?>
			<tr>
			<td>&nbsp;</td>
			<td><strong>Cor:</strong></td>
			<td colspan="2"><?php echo $listar[_cor];?></td>
			<td colspan="3">&nbsp;</td>
            <td>&nbsp;</td>
			</tr>
			<?php
		}
		if ($listar[_ph] != 'Meketrefe')
		{
			?>
			<tr>
			<td>&nbsp;</td>
			<td><strong>pH:</strong></td>
			<td colspan="2"><?php echo $listar[_ph];?></td>
			<td align="center" class="textoM">5,5 a 7,5</td>
			<td colspan="2" align="center" class="textoM">5 a 7</td>
            <td>&nbsp;</td>
			</tr>
			<?php
		}
	}
	
	if (
		$listar[_proteinas]     != 'Meketrefe' || 
		$listar[_glicose]       != 'Meketrefe' || 
		$listar[_corpos_c]      != 'Meketrefe' || 
		$listar[_bilirrubina]   != 'Meketrefe' || 
		$listar[_urobilinogenio]!= 'Meketrefe' || 
		$listar[_nitrito]       != 'Meketrefe' || 
		$listar[_sangue]        != 'Meketrefe'
		)
	{
	?>
		<tr>
		<td colspan="7">&nbsp;</td>
		</tr>
		<tr>
		<td colspan="4"><strong>Exame Quimico:</strong></td>
		<td colspan="3" align="center" class="textoM"><strong>Valores de Refer&ecirc;ncia:</strong></td>
        <td>&nbsp;</td>
		</tr>
		<?php
		if ($listar[_proteinas] != 'Meketrefe')
		{
			?>
			<tr>
			<td>&nbsp;</td>
			<td><strong>Prote&iacute;nas:</strong></td>
			<td width="110"><?php echo $listar[_proteinas];?></td>
			<td width="50"><strong>mg/dL</strong></td>
			<td colspan="3" class="textoM"><em>Ausente a tra&ccedil;os</em></td>
            <td>&nbsp;</td>
			</tr>
			<?php
		}
		if ($listar[_glicose] != 'Meketrefe')
		{
			?>
			<tr>
			<td>&nbsp;</td>
			<td><strong>Glicose:</strong></td>
			<td><?php echo $listar[_glicose];?></td>
			<td><strong>mg/dL</strong></td>
			<td colspan="3" class="textoM"><em>Negativo</em></td>
            <td>&nbsp;</td>
			</tr>
			<?php
		}
		if ($listar[_corpos_c] != 'Meketrefe')
		{
			?>
			<tr>
			<td>&nbsp;</td>
			<td><strong>Corpos cet&ocirc;nicos:</strong></td>
			<td><?php echo $listar[_corpos_c];?></td>
			<td><strong>mg/dL</strong></td>
			<td colspan="3" class="textoM"><em>Negativo</em></td>
            <td>&nbsp;</td>
			</tr>
			<?php
		}
		if ($listar[_bilirrubina] != 'Meketrefe')
		{
			?>
			<tr>
			<td>&nbsp;</td>
			<td><strong>Bilirrubina:</strong></td>
			<td colspan="2"><?php echo $listar[_bilirrubina];?></td>
			<td colspan="3" class="textoM"><em>Negativo</em></td>
            <td>&nbsp;</td>
			</tr>
			<?php
		}
		if ($listar[_urobilinogenio] != 'Meketrefe')
		{
			?>
			<tr>
			<td>&nbsp;</td>
			<td><strong>Urobilinog&ecirc;nio:</strong></td>
			<td><?php echo $listar[_urobilinogenio];?></td>
			<td><strong>mg/dL</strong></td>
			<td colspan="3" class="textoM"><em>Normal</em></td>
            <td>&nbsp;</td>
			</tr>
			<?php
		}
		if ($listar[_nitrito] != 'Meketrefe')
		{
			?>
			<tr>
			<td>&nbsp;</td>
			<td><strong>Nitrito:</strong></td>
			<td colspan="2"><?php echo $listar[_nitrito];?></td>
			<td colspan="3" class="textoM"><em>Negativo</em></td>
            <td>&nbsp;</td>
			</tr>
			<?php
		}
		if ($listar[_sangue] != 'Meketrefe')
		{
			?>
			<tr>
			<td>&nbsp;</td>
			<td><strong>Sangue:</strong></td>
			<td colspan="2"><?php echo $listar[_sangue];?></td>
			<td colspan="3" class="textoM"><em>Negativo</em></td>
            <td>&nbsp;</td>
			</tr>
			<?php
		}
	}
	if (
		$listar[_celulas]     != 'Meketrefe' || 
		$listar[_leucocitos]  != 'Meketrefe' || 
		$listar[_hemacias]    != 'Meketrefe' || 
		$listar[_filamentos_m]!= 'Meketrefe' || 
		$listar[_cilindros]   != 'Meketrefe' || 
		$listar[_cristais]    != 'Meketrefe'
		)
	{
	?>
		<tr>
		<td colspan="8">&nbsp;</td>
		</tr>
		<tr>
		<td colspan="4"><strong>Exame Microsc&oacute;pico:</strong></td>
		<td colspan="3" align="center" class="textoM"><strong>Valores de Refer&ecirc;ncia:</strong></td>
            <td>&nbsp;</td>
		</tr>
		<?php
		if ($listar[_celulas] != 'Meketrefe')
		{
			?>
			<tr>
			<td>&nbsp;</td>
			<td><strong>C&eacute;lulas:</strong></td>
			<td colspan="2"><?php echo $listar[_celulas];?></td>
			<td colspan="3">&nbsp;</td>
            <td>&nbsp;</td>
			</tr>
			<?php
		}
		if ($listar[_leucocitos] != 'Meketrefe')
		{
			?>
			<tr>
			<td>&nbsp;</td>
			<td><strong>Leuc&oacute;citos:</strong></td>
			<td colspan="2"><?php echo $listar[_leucocitos];?></td>
			<td colspan="3" class="textoM"><em>At&eacute; 5 por campo</em></td>
            <td>&nbsp;</td>
			</tr>
			<?php
		}
		if ($listar[_hemacias] != 'Meketrefe')
		{
			?>
			<tr>
			<td>&nbsp;</td>
			<td><strong>Hem&aacute;cias:</strong></td>
			<td colspan="2"><?php echo $listar[_hemacias];?></td>
			<td colspan="3" class="textoM"><em>At&eacute; 10 por campo</em></td>
            <td>&nbsp;</td>
			</tr>
			<?php
		}
		if ($listar[_filamentos_m] != 'Meketrefe')
		{
			?>
			<tr>
			<td>&nbsp;</td>
			<td><strong>Filamentos de muco:</strong></td>
			<td colspan="2"><?php echo $listar[_filamentos_m];?></td>
			<td colspan="3" class="textoM"><em>At&eacute; 2 +</em></td>
            <td>&nbsp;</td>
			</tr>
			<?php
		}
		if ($listar[_cilindros] != 'Meketrefe')
		{
			?>
			<tr>
			<td>&nbsp;</td>
			<td><strong>Cilindros:</strong></td>
			<td colspan="2"><?php echo $listar[_cilindros];?></td>
			<td colspan="3" class="textoM"><em>Ausente</em></td>
            <td>&nbsp;</td>
			</tr>
			<?php
		}
		if ($listar[_cristais] != 'Meketrefe')
		{
			?>
			<tr>
			<td>&nbsp;</td>
			<td valign="top"><strong>Cristais:</strong></td>
			<td colspan="2" valign="top"><?php echo $listar[_cristais];?></td>
			<td colspan="3" class="textoM"><em>Ausente ou at&eacute; 1 + de oxalatos/uratos/fostato</em></td>
            <td>&nbsp;</td>
			</tr>
			<?php
		}
	}
	if ($listar[_observacao] != 'Meketrefe')
	{
		?>
		<tr>
		<td colspan="8">&nbsp;</td>
		</tr>
		<tr>
		<td colspan="8"><strong>Observa&ccedil;&otilde;es:</strong></td>
		</tr>
		<tr>
		<td colspan="8"><?php echo nl2br($listar[_observacao]); ?></td>
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
