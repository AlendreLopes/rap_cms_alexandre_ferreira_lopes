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
	<th width="75">&nbsp;</th>
	<th width="35">&nbsp;</th>
	<th width="110">&nbsp;</th>
	<th width="200">&nbsp;</th>
	</tr>
	
	<tr>
	<th colspan="8">&nbsp;</th>
	</tr>
	
	<tr>
    <th align="left"><strong>Protocolo:</strong></th>
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
	<th colspan="8">ERITROGRAMA</th>
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
		$listar[_hemacias]   != 'Meketrefe' || 
		$listar[_hemoglobina]!= 'Meketrefe' || 
		$listar[_hematocrito]!= 'Meketrefe' || 
		$listar[_vcm]        != 'Meketrefe' || 
		$listar[_hcm]        != 'Meketrefe' || 
		$listar[_chcm]       != 'Meketrefe'
		)
	{
	?>
		<tr>
		<td colspan="4"><strong>ERITROGRAMA</strong></td>
		<td colspan="2" align="center" class="textoM">C&atilde;o</td>
		<td align="center" class="textoM">Gato</td>
		<td align="center">&nbsp;</td>
		</tr>
		<?php
		if ($listar[_hemacias] != 'Meketrefe')
		{
		?>
			<tr>
			<td align="left">&nbsp;</td>
			<td align="left"><strong>Hem&aacute;ceas:</strong></td>
			<td align="left"><?php echo $listar[_hemaceas];?></td>
			<td align="left"><strong>milh&otilde;es/uL</strong></td>
			<td colspan="2" align="center" class="textoM"><em>5,5 a 8,5</em></td>
			<td align="center" class="textoM">5 a 10</td>
			<td>&nbsp;</td>
			</tr>
		<?php
		}
		if ($listar[_hemoglobina] != 'Meketrefe')
		{
		?>
			<tr>
			<td align="left">&nbsp;</td>
			<td align="left"><strong>Hemoglobina:</strong></td>
			<td align="left"><?php echo $listar[_hemoglobina];?></td>
			<td align="left"><strong>g/dL</strong></td>
			<td colspan="2" align="center" class="textoM"><em>12,2 a 18,0</em></td>
			<td align="center" class="textoM">8 a 15 </td>
			<td align="center">&nbsp;</td>
			</tr>
		<?php
		}
		if ($listar[_hematocrito] != 'Meketrefe')
		{
		?>
			<tr>
			<td align="left">&nbsp;</td>
			<td align="left"><strong>Hemat&oacute;crito:</strong></td>
			<td align="left"><?php echo $listar[_hematocrito];?></td>
			<td align="left"><strong>%</strong></td>
			<td colspan="2" align="center" class="textoM"><em>37,0 a 55,0</em></td>
			<td align="center" class="textoM">24 a 45</td>
			<td align="center">&nbsp;</td>
			</tr>
		<?php
		}
		if ($listar[_vcm] != 'Meketrefe')
		{
		?>
			<tr>
			<td align="left">&nbsp;</td>
			<td align="left"><strong>V.C.M.:</strong></td>
			<td align="left"><?php echo $listar[_vcm];?></td>
			<td align="left"><strong>fl</strong></td>
			<td colspan="2" align="center"><span class="textoM"><em>60,0 a 77,0</em></span></td>
			<td align="center" class="textoM">39 a 55</td>
			<td align="center">&nbsp;</td>
			</tr>
		<?php
		}
		if ($listar[_hcm] != 'Meketrefe')
		{
		?>
			<tr>
			<td align="left">&nbsp;</td>
			<td align="left"><strong>H.C.M.:</strong></td>
			<td align="left"><?php echo $listar[_hcm];?></td>
			<td align="left"><strong>pg</strong></td>
			<td colspan="2" align="center"><span class="textoM"><em>19,5 a 24,5</em></span></td>
			<td align="center" class="textoM">13 a 17</td>
			<td align="center">&nbsp;</td>
			</tr>
		<?php
		}
		if ($listar[_chcm] != 'Meketrefe')
		{
		?>
			<tr>
			<td align="left">&nbsp;</td>
			<td align="left"><strong>C.H.C.M.:</strong></td>
			<td align="left"><?php echo $listar[_chcm];?></td>
			<td align="left"><strong>%</strong></td>
			<td colspan="2" align="center"><span class="textoM"><em>32,0 a 36,0</em></span></td>
			<td align="center" class="textoM">31 a 34</td>
			<td align="center">&nbsp;</td>
			</tr>
		<?php
		}
	}
	if($listar[_observacao] != 'Meketrefe')
	{
	?>
        <tr><td colspan="8">&nbsp;</td></tr>
		<tr>
		<td colspan="8"><strong>Observa&ccedil;&atilde;o:</strong></td>
		</tr>
		<tr>
		<td colspan="8" align="justify"><?php echo nl2br($listar[_observacao]);?></td>
		</tr>
        <tr><td colspan="8">&nbsp;</td></tr>
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
