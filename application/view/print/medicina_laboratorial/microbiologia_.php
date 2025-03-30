<div class="corpo">
	
	<div class="cabecalho"></div>
	
	<div class="conteudo">
	
	<!-- Laudo  -->
	
	<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
	
	<?php include("application/controller/plugins/indexModeloProtocoloImpressao.php");?>
	
	<table width="840" border="0" cellpadding="0" cellspacing="0">
	<tr>
	<td width="100">&nbsp;</td>
	<td width="150">&nbsp;</td>
	<td width="590">&nbsp;</td>
	</tr>
	<tr>
	<td colspan="3" align="center"><strong>MICROBIOLOGIA</strong></td>
	</tr>
	<tr>
	<td colspan="3">&nbsp;</td>
	</tr>
	<?php
	if ($listar[_cultura_amostra] != 'Meketrefe'){
	?>
		<tr>
		<th colspan="3" >Cultura e Antibiograma</th>
		</tr>
		<tr>
		<td colspan="3" class="textoM"><strong>Amostra:</strong> <em><?php echo $listar[_cultura_amostra]; ?></em></td>
		</tr>
		<tr>
		<td colspan="3" valign="top"  class="textoM"><strong>M&eacute;todo:</strong> <em>Cultura-Identificação/Antibiograma</em></td>
		</tr>
		<tr>
		<td colspan="3"><strong>Resultado:</strong></td>
		</tr>
		<tr>
		<td colspan="3"><?php echo nl2br($listar[_cultura_resultado]); ?></td>
		</tr>
		<tr>
		<td colspan="3">&nbsp;</td>
		</tr>
		<tr>
		<td colspan="3"><strong>Antibiograma</strong></td>
		</tr>
		<tr>
		<td colspan="3"><?php echo nl2br($listar[_cultura_antibiograma]); ?></td>
		</tr>
		<tr>
		<td colspan="3">&nbsp;</td>
		</tr>
	<?php
	}
	if ($listar[_cultura_fungica_amostra] != 'Meketrefe'){
	?>
		<tr>
		<th colspan="3">Cultura Fúngica</th>
		</tr>
		<tr>
		<td colspan="3" class="textoM"><strong>Amostra:</strong> <em><?php echo $listar[_cultura_fungica_amostra]; ?></em></td>
		</tr>
		<tr>
		<td colspan="3"  class="textoM"><strong>M&eacute;todo:</strong> <em>Cultivo em meios seletivos e diferenciais</em></td>
		</tr>
		<tr>
		<td colspan="3"><strong>Resultado:</strong></td>
		</tr>
		<tr>
		<td colspan="3"><?php echo nl2br($listar[_cultura_fungica_resultado]); ?></td>
		</tr>
		<td colspan="3">&nbsp;</td>
		</tr>
	<?php
	}
	if ($listar[_cultura_urina_amostra] != 'Meketrefe'){
	?>
		<tr>
		<th colspan="3"><strong>Cultura de Urina Antibiograma Veterin&aacute;rio</strong></th>
		</tr>
		<tr>
		<td colspan="3" class="textoM"><strong>Amostra:</strong> <em><?php echo nl2br($listar[_cultura_urina_amostra]); ?></em></td>
		</tr>
		<tr>
		<td colspan="3" valign="top"  class="textoM"><strong>M&eacute;todo:</strong> <em>Cultura-Identifica��o/Antibiograma</em></td>
		</tr>
		<tr>
		<td colspan="3"><strong>Resultado</strong></td>
		</tr>
		<tr>
		<td colspan="3"><?php echo nl2br($listar[_cultura_urina_resultado]); ?></td>
		</tr>
		<tr>
		<td colspan="3">&nbsp;</td>
		</tr>
	<?php
	}
	if($listar[_observacao] != 'Meketrefe')
	{
	?>
		<tr>
		<td colspan="3"><strong>Observa&ccedil;&atilde;o:</strong></td>
		</tr>
		<tr>
		<td colspan="3"><?php echo nl2br($listar[_observacao]);?></td>
		</tr>
		<tr>
		<td colspan="3">&nbsp;</td>
		</tr>
	<?php
	}
	?>
	</table>
	
	<table width="840" border="0" cellspacing="0" cellpadding="0">
	<tr>
	  <th colspan="10" align="right"><img src="http://reports.petimagem.com.br/public/image/assinaturas/danielle.jpg" alt="Dr&ordf; Danielle" title="Drª Danielle Tullio Murad" width="150" height="120" /></th>
        </tr>
	<tr>
	<td colspan="2">&nbsp;</td>
	</tr>
    <tr>
    <td colspan="2" align="center" class="textoM">
	&ldquo;O presente resultado tem seu valor restrito &agrave; amostra examinada neste laborat&oacute;rio .&rdquo;	</td>
    </tr>
	<tr>
    <td colspan="2">&nbsp;</td>
    </tr>
	<tr>
	<td colspan="2" align="justify" class="textoM">
	&ldquo;Qualquer teste e/ou exame laboratorial depende da  an&aacute;lise conjunta do seu resultado e dos dados cl&iacute;nicos. Eventualmente,  resultados discordantes podem ocorrer por interfer&ecirc;ncias fisiol&oacute;gicas,  farmacol&oacute;gicas, de acondicionamento e envio das amostras. Em caso de d&uacute;vida,  solicitamos, ao M&eacute;dico Veterin&aacute;rio, contatar com o M&eacute;dico Veterin&aacute;rio Patologista  respons&aacute;vel.&rdquo;</td>
	</tr>
	<tr>
    <td colspan="2">&nbsp;</td>
    </tr>
    </table>
	
	<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
    
	</div>
	
	<div class="rodape">
	
	<strong><?php echo 'Curitiba, ' . Functions::dia_da_semana() . ' ' . date('d') . ' de ' . Functions::retorna_mes(date('n')) . ' de ' . date('Y');?></strong>
	
	</div>

</div>

<div class="ppagina"></div>