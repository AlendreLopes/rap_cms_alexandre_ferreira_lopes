<div class="corpo">
	
		<div class="cabecalho"></div>
	
	<div class="conteudo">
	
	<!-- Laudo Eletrocardiograma -->
	
	<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
	
	<?php include("application/controller/plugins/indexModeloProtocoloImpressao.php");?>
	
	<table width="840" border="0" cellpadding="0" cellspacing="0">
	
    <tr>
	<td colspan="6">&nbsp;</td>
	</tr>
	
    <tr>
	<th colspan="6">ELETROCARDIOGRAMA</th>
	</tr>
	
    <tr>
	<td width="70">&nbsp;</td>
	<td width="95">&nbsp;</td>
	<td width="70">&nbsp;</td>
	<td width="70">&nbsp;</td>
	<td width="70">&nbsp;</td>
	<td width="465">&nbsp;</td>
	</tr>
    
	<?php
	if($listar[_batimento] != 'Meketrefe')
	{
	?>
		<tr>
		<td>&nbsp;</td>
		<td colspan="2"><strong>Freq&uuml;&ecirc;ncia Card&iacute;aca:</strong></td>
		<td><?php echo $listar[_batimento];?></td>
		<td><strong>bat/min </strong></td>
		<td>&nbsp;</td>
		</tr>
	<?php
	}
	if($listar[_ritmo] != 'Meketrefe')
	{
	?>
		<tr>
		<td>&nbsp;</td>
		<td><strong>Ritmo:</strong></td>
		<td colspan="4"><?php echo $listar[_ritmo];?></td>
		</tr>
	<?php
	}
	if($listar[_eixo] != 'Meketrefe')
	{
	?>
		<tr>
		<td>&nbsp;</td>
		<td><strong>Eixo:</strong></td>
		<td><?php echo $listar[_eixo];?></td>
		<td colspan="3"><strong>&ordm;</strong></td>
		</tr>
	<?php
	}
	?>
	<tr>
	<td colspan="6">&nbsp;</td>
	</tr>
	<tr>
	<td colspan="6" class="textoM">Velocidade 50mm/s 1cm = 1mV</td>
	</tr>
	<tr>
	<td colspan="6"><strong>Leitura em DII:</strong></td>
	</tr>
	<?php
	if($listar[_ondap] != 'Meketrefe')
	{
	?>
		<tr>
		<td width="70">&nbsp;</td>
		<td width="95"><strong>Onda P:</strong></td>
		<td width="70"><?php echo $listar[_ondap];?></td>
		<td width="70"><strong>mV</strong></td>
		<td width="70"><?php echo $listar[_ondap_s];?></td>
		<td width="465"><strong>s</strong></td>
		</tr>
	<?php
	}
	if($listar[_pr] != 'Meketrefe')
	{
	?>
		<tr>
		<td>&nbsp;</td>
		<td><strong>Onda PR:</strong></td>
		<td><?php echo $listar[_pr];?></td>
		<td colspan="3"><strong>s</strong></td>
		</tr>
	<?php
	}
	if($listar[_qrs] != 'Meketrefe')
	{
	?>
		<tr>
		<td>&nbsp;</td>
		<td><strong>Onda QRS:</strong></td>
		<td><?php echo $listar[_qrs];?></td>
		<td colspan="3"><strong>s</strong></td>
		</tr>
	<?php
	}
	if($listar[_r] != 'Meketrefe')
	{
	?>
		<tr>
		<td>&nbsp;</td>
		<td><strong>Onda R:</strong></td>
		<td><?php echo $listar[_r];?></td>
		<td colspan="3"><strong>mV</strong></td>
		</tr>
	<?php
	}
	if($listar[_st] != 'Meketrefe')
	{
	?>
		<tr>
		<td>&nbsp;</td>
		<td><strong>Onda ST:</strong></td>
		<td><?php echo $listar[_st];?></td>
		<td colspan="3"><strong>mV</strong></td>
		</tr>
	<?php
	}
	if($listar[_t] != 'Meketrefe')
	{
	?>
		<tr>
		<td>&nbsp;</td>
		<td><strong>Onda T:</strong></td>
		<td><?php echo $listar[_t];?></td>
		<td colspan="3"><strong>mV</strong></td>
		</tr>
	<?php
	}
	if($listar[_qt] != 'Meketrefe')
	{
	?>
		<tr>
		<td>&nbsp;</td>
		<td><strong>Onda QT:</strong></td>
		<td><?php echo $listar[_qt];?></td>
		<td colspan="3"><strong>s</strong></td>
		</tr>
	<?php
	}
	?>
	<tr>
	<td colspan="6">&nbsp;</td>
	</tr>
	<?php
	if($listar[_outros] != 'Meketrefe')
	{
	?>
		<tr>
		<td colspan="6"><strong>Outros:</strong></td>
		</tr>
		<tr>
		<td colspan="6"><?php echo nl2br($listar[_outros]);?></td>
		</tr>
		<tr class="textoM">
		<td colspan="3">&nbsp;</td>
		<td colspan="3">Valores de referência: </td>
		</tr>
		<tr class="textoM">
		<td colspan="3">&nbsp;</td>
		<td colspan="3">CV5RL (rV2) – onda R: máximo de 2,5 mV - onda T: positiva </td>
		</tr>
		<tr class="textoM">
		<td colspan="3">&nbsp;</td>
		<td colspan="3">CV6LL (V2) – onda R: máximo de 2,5 mV - onda S: máximo de 0,8 mV </td>
		</tr>
		<tr class="textoM">
		<td colspan="3">&nbsp;</td>
		<td colspan="3">CV6LU (V4) – onda R: máximo de 2,5 mV - onda S: máximo de 0,7 mV </td>
		</tr>
		<tr class="textoM">
		<td colspan="3">&nbsp;</td>
		<td colspan="3">V10 – complexo QRS: negativo - onda T: negativa</td>
		</tr>
		<tr>
		<td colspan="6" class="textoM">&nbsp;</td>
		</tr>
	<?php
	}
	if($listar[_interpretacao] != 'Meketrefe')
	{
	?>
		<tr>
		<td colspan="6"><strong>Interpreta&ccedil;&atilde;o:</strong></td>
		</tr>
		<tr>
		<td colspan="6"><?php echo nl2br($listar[_interpretacao]);?></td>
		</tr>
		<tr>
		<td colspan="6">&nbsp;</td>
		</tr>
	<?php
	}
	?>
	</table>
	
	<table width="840" border="0" cellspacing="0" cellpadding="0">
	<tr>
	<td align="right"><img alt="Dr&ordf; Danielle" title="Drª Danielle Tullio Murad" src="http://reports.petimagem.com.br/public/image/assinaturas/danielle.jpg" /></td>
	</tr>
	<tr>
	<td colspan="2">&nbsp;</td>
	</tr>
	<tr>
	<td colspan="2" align="justify" class="textoM">&ldquo;O resultado do presente exame n&atilde;o configura apresen&ccedil;a ou aus&ecirc;ncia de doen&ccedil;a devendo ser correlacionado com demais dados cl&iacute;nicos e exames complementares pertinentes ao caso.&rdquo;</td>
	</tr>
	<tr>
	<td colspan="2" align="justify" class="textoM">&nbsp;</td>
	</tr>
    </table>
	
	<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
    
	</div>
	
	<div class="rodape">
	
	<strong><?php echo 'Curitiba, ' . Functions::dia_da_semana() . ' '.date('d').' de ' . Functions::retorna_mes(date('n')) . ' de '.date('Y');?></strong>
	
	</div>
	
</div>

<div class="ppagina"></div>
