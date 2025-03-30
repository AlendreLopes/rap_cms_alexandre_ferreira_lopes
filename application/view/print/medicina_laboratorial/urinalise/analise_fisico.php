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
	<th colspan="8">AN&Aacute;LISE F&Iacute;SICO - QU&Iacute;MICA DE C&Aacute;LCULO</th>
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
		$listar[_forma]        != 'Meketrefe' || 
		$listar[_dimensoes]    != 'Meketrefe' || 
		$listar[_cor]          != 'Meketrefe' || 
		$listar[_consistencia] != 'Meketrefe' || 
		$listar[_superficie]   != 'Meketrefe' || 
		$listar[_aspecto]      != 'Meketrefe' || 
		$listar[_peso]          != 'Meketrefe'
		)
	{
		?>
		<tr>
	    <td colspan="9"><strong>Caracteres F&iacute;sico:</strong></td>
	    </tr>
		<?php
		if ($listar[_forma] != 'Meketrefe')
		{
			?>
			<tr>
			<td>&nbsp;</td>
			<td><strong>Forma:</strong></td>
			<td colspan="7"><?php echo $listar[_forma];?></td>
			</tr>
			<?php
		}
		if ($listar[_dimensoes] != 'Meketrefe')
		{
			?>
			<tr>
			<td>&nbsp;</td>
			<td><strong>Dimens&otilde;es:</strong></td>
			<td colspan="7"><?php echo $listar[_dimensoes];?></td>
			</tr>
			<?php
		}
		if ($listar[_cor] != 'Meketrefe')
		{
		?>
			<tr>
			<td>&nbsp;</td>
			<td><strong>Cor:</strong></td>
			<td colspan="7"><?php echo $listar[_cor];?></td>
			</tr>
		<?php
		}
		if ($listar[_superficie] != 'Meketrefe')
		{
		?>
			<tr>
			<td>&nbsp;</td>
			<td><strong>Superfície:</strong></td>
			<td colspan="7"><?php echo $listar[_superficie];?></td>
			</tr>
		<?php
		}
		if ($listar[_aspecto] != 'Meketrefe')
		{
		?>
			<tr>
			<td>&nbsp;</td>
			<td><strong>Aspecto:</strong></td>
			<td colspan="7"><?php echo $listar[_aspecto];?></td>
			</tr>
		<?php
		}
		if ($listar[_peso] != 'Meketrefe')
		{
		?>
			<tr>
			<td>&nbsp;</td>
			<td><strong>Peso:</strong></td>
			<td colspan="7"><?php echo $listar[_peso];?></td>
			</tr>
		<?php
		}
	}
	?>
	<tr>
	<td colspan="9">&nbsp;</td>
	</tr>
	<?php
	if (
		$listar[_carbonato] != 'Meketrefe' || 
		$listar[_oxalato]   != 'Meketrefe' || 
		$listar[_calcio]    != 'Meketrefe' || 
		$listar[_fosfato]   != 'Meketrefe' || 
		$listar[_magnesio]  != 'Meketrefe' || 
		$listar[_amonio]    != 'Meketrefe' || 
		$listar[_urato]     != 'Meketrefe' || 
		$listar[_cistina]   != 'Meketrefe'
		)
	{
		?>
		<tr>
	    <td colspan="9"><strong>Exame Qu&iacute;mico:</strong></td>
	    </tr>
		<?php
		if ($listar[_carbonato] != 'Meketrefe')
		{
			?>
			<tr>
			<td>&nbsp;</td>
			<td><strong>Carbonato:</strong></td>
			<td colspan="7"><?php echo $listar[_carbonato];?></td>
			</tr>
			<?php
		}
		if ($listar[_oxalato] != 'Meketrefe')
		{
			?>
			<tr>
			<td>&nbsp;</td>
			<td><strong>Oxalato:</strong></td>
			<td colspan="7"><?php echo $listar[_oxalato];?></td>
			</tr>
			<?php
		}
		if ($listar[_calcio] != 'Meketrefe')
		{
			?>
			<tr>
			<td>&nbsp;</td>
			<td><strong>C&aacute;lcio:</strong></td>
			<td colspan="7"><?php echo $listar[_calcio];?></td>
			</tr>
			<?php
		}
		if ($listar[_fosfato] != 'Meketrefe')
		{
			?>
			<tr>
			<td>&nbsp;</td>
			<td><strong>Fosfato:</strong></td>
			<td colspan="7"><?php echo $listar[_fosfato];?></td>
			</tr>
			<?php
		}
		if ($listar[_magnesio] != 'Meketrefe')
		{
			?>
			<tr>
			<td>&nbsp;</td>
			<td><strong>Magn&eacute;sio:</strong></td>
			<td colspan="7"><?php echo $listar[_magnesio];?></td>
			</tr>
			<?php
		}
		if ($listar[_amonio] != 'Meketrefe')
		{
			?>
			<tr>
			<td>&nbsp;</td>
			<td><strong>Am&ocirc;nio:</strong></td>
			<td colspan="7"><?php echo $listar[_amonio];?></td>
			</tr>
			<?php
		}
		if ($listar[_urato] != 'Meketrefe')
		{
			?>
			<tr>
			<td>&nbsp;</td>
			<td><strong>Urato:</strong></td>
			<td colspan="7"><?php echo $listar[_urato];?></td>
			</tr>
			<?php
		}
		if ($listar[_cistina] != 'Meketrefe')
		{
			?>
			<tr>
			<td>&nbsp;</td>
			<td><strong>Cistina:</strong></td>
			<td colspan="7"><?php echo $listar[_cistina];?></td>
			</tr>
			<?php
		}
	}
	if ($listar[_conclusao] != 'Meketrefe')
	{
		?>
		<tr>
		<tr><td colspan="9">&nbsp;</td></tr>
		<td colspan="9"><strong>Conclus&atilde;o</strong></td>
		</tr>
		<tr>
		<td colspan="9" align="justify"><?php echo nl2br($listar[_conclusao]); ?></td>
		</tr>
		<?php
	}
	if($listar[_observacao] != 'Meketrefe')
	{
		?>
		<tr>
		<tr><td colspan="9">&nbsp;</td></tr>
		<td colspan="9"><strong>Observa&ccedil;&atilde;o:</strong></td>
		</tr>
		<tr>
		<td colspan="9"><?php echo nl2br($listar[_observacao]);?></td>
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
