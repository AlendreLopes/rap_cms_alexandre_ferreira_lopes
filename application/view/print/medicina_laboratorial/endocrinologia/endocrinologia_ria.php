<div class="corpo">
	
	<div class="cabecalho"></div>
	
	<div class="conteudo">
	
	<!-- Laudo -->
	
	<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
	
	<table width="840" border="0" cellpadding="0" cellspacing="0">
	
	<thead>
	
	<tr>
	<th width="105">&nbsp;</th>
	<th width="70">&nbsp;</th>
	<th width="80">&nbsp;</th>
	<th width="110">&nbsp;</th>
	<th width="55">&nbsp;</th>
	<th width="75">&nbsp;</th>
	<th width="35">&nbsp;</th>
	<th width="110">&nbsp;</th>
	<th width="200">&nbsp;</th>
	</tr>
	
	<tr>
	<th colspan="9">&nbsp;</th>
	</tr>
	
	<tr><th align="left"><strong>Protocolo:</strong></th>
	<th colspan="3" align="left"><span class="no_bold"><?php echo $Lista[_protocolo];?></span></th><th colspan="2" align="left"><strong>Solicita&ccedil;&atilde;o:</strong></th>
	<th colspan="2" align="left" class="no_bold"><?php echo $Implode;?></th>
	</tr>
	
	<tr>
	<th align="left"><strong>Paciente:</strong></th>
	<th colspan="2" align="left"><span class="no_bold"><?php echo $Lista[_paciente];?></span></th>
	<th colspan="2" class="no_bold" align="left">&nbsp;</th>
	<th colspan="2" align="left"><strong>Idade:</strong></th>
	<th colspan="2" align="left" class="no_bold"><?php echo $Lista[_idade];?></th>
	</tr>
	
	<tr>
	<th align="left"><strong>Esp&eacute;cie:</strong></th>
	<th colspan="2" align="left"><span class="no_bold"><?php echo $Lista[_especie];?></span></th>
	<th colspan="2" class="no_bold" align="left">&nbsp;</th>
	<th colspan="2" align="left"><strong>Sexo:</strong></th>
	<th colspan="2" align="left" class="no_bold"><?php echo $Lista[_genero];?></th>
	</tr>
	
	<tr>
	<th align="left"><strong>Ra&ccedil;a:</strong></th>
	<th colspan="2" align="left"><span class="no_bold"><?php echo $Lista[_raca];?></span></th>
	<th colspan="2" class="no_bold" align="left">&nbsp;</th>
	<th colspan="2" align="left"><strong>Propriet&aacute;rio:</strong></th>
	<th colspan="2" align="left" class="no_bold"><?php echo $Lista[_proprietario];?></th>
	</tr>
	
	<tr>
	<th align="left"><strong>Cl&iacute;nica:</strong></th>
	<th colspan="2" align="left"><span class="no_bold"><?php echo $Lista[_clinica_titulo];?></span></th>
	<th colspan="2" class="no_bold" align="left">&nbsp;</th>
	<th colspan="2" align="left"><strong>Dr(a).:</strong></th>
	<th colspan="2" align="left" class="no_bold"><?php echo $Lista[_requisitante];?></th>
	</tr>
	
	<tr><th colspan="9">&nbsp;</th></tr>
	
	<tr>
	<th colspan="9">ENDOCRINOLOGIA RIE</th>
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
	<?php
	if ($listar[_cortisol] != 'Meketrefe'){
	?>
		<tr>
		<td><strong>CORTISOL:</strong></td>
		<td>&nbsp;</td>
		<td><strong><?php echo $listar[_cortisol]; ?></strong></td>
		<td colspan="6"><strong>ng/mL</strong></td>
		</tr>
		<tr>
		<td class="textoM"><strong>Amostra:</strong></td>
		<td colspan="8" class="textoM"><em>Soro</em></td>
		</tr>
		<tr>
		<td class="textoM"><strong>M&eacute;todo:</strong></td>
		<td colspan="8" class="textoM"><em>RADIOIMUNOENSAIO</em></td>
		</tr>
		<tr>
		<td colspan="3">&nbsp;</td>
		<td colspan="6" class="textoM">
        <strong>Canino</strong>:&nbsp; <em>10,0 a 40,0 ng/mL</em><br />
		<strong>Felino</strong>:&nbsp; <em>10,0 a 50,0 ng/mL</em><br />
		<strong>Eq&uuml;inos</strong>: <em>20 a 90,0 ng/mL</em></td>
		</tr>
		<tr>
		<td colspan="9" align="center">&nbsp;</td>
		</tr>
	<?php
	}
	if ($listar[_estradiol] != 'Meketrefe'){
	?>
		<tr>
		<td><strong>ESTRADIOL:</strong></td>
		<td>&nbsp;</td>
		<td><strong><?php echo $listar[_estradiol]; ?></strong></td>
		<td colspan="6"><strong>pg/mL</strong></td>
		</tr>
		<tr>
		<td class="textoM"><strong>Amostra:</strong></td>
		<td colspan="8" class="textoM"><em>Soro</em></td>
		</tr>
		<tr>
		<td class="textoM"><strong>M&eacute;todo:</strong></td>
		<td colspan="8" class="textoM"><em>RADIOIMUNOENSAIO</em></td>
		</tr>
		<tr>
		<td colspan="3">&nbsp;</td>
		<td colspan="6" class="textoM">
        <strong>C&atilde;o</strong>: <em>at&eacute; 20 pg/mL</em><br />
		<strong>Cadela</strong>: <em>Proestro/ Estro &ndash; 20 a 50 pg/mL</em><br />
		<strong>Gesta&ccedil;&atilde;o</strong>: <em>at&eacute; 20 pg/mL</em><br />
		<strong>Gata</strong>: <em>40 a 90 pg/mL</em></td>
		</tr>
		<tr>
		<td colspan="9">&nbsp;</td>
		</tr>
	<?php
	}
	if ($listar[_insulina] != 'Meketrefe'){
	?>
		<tr>
		<td><strong>INSULINA:</strong></td>
		<td>&nbsp;</td>
		<td><strong><?php echo $listar[_insulina]; ?></strong></td>
		<td colspan="6"><strong>uU/mL</strong></td>
		</tr>
		<tr>
		<td class="textoM"><strong>Amostra:</strong></td>
		<td colspan="8" class="textoM"><em>Soro</em></td>
		</tr>
		<tr>
		<td class="textoM"><strong>M&eacute;todo:</strong></td>
		<td colspan="8" class="textoM"><em>RADIOIMUNOENSAIO</em></td>
		</tr>
		<tr>
		<td colspan="3">&nbsp;</td>
		<td colspan="6" class="textoM">
        <strong>Canino</strong>: <em>5 a 25 uU/mL</em><br />
		<strong>Felino</strong>: &nbsp;<em>2 a 10 uU/mL</em><br />
		<strong>Eq&uuml;inos</strong>: <em>1 a 50 uU/mL</em></td>
		</tr>
		<tr>
		<td colspan="9">&nbsp;</td>
		</tr>
	<?php
	}
	if ($listar[_t4_total] != 'Meketrefe')
	{
	?>
		<tr>
		<td><strong>T4 TOTAL:</strong></td>
		<td>&nbsp;</td>
		<td><strong><?php echo $listar[_t4_total]; ?></strong></td>
		<td colspan="6"><strong>ng/dL</strong></td>
		</tr>
		<tr>
		<td class="textoM"><strong>Amostra:</strong></td>
		<td colspan="8" class="textoM"><em>Soro</em></td>
		</tr>
		<tr>
		<td class="textoM"><strong>M&eacute;todo:</strong></td>
		<td colspan="8" class="textoM"><em>RADIOIMUNOENSAIO</em></td>
		</tr>
		<tr>
		<td colspan="3">&nbsp;</td>
		<td colspan="6" class="textoM">
        <strong>Caninos:</strong> <em>15,0 a 30,0 ng/mL</em>
        <br />
        <strong>Felinos:</strong> <em>15,0 a 30,0 ng/mL</em>
        <br />
        <strong>Eq&uuml;inos:</strong> <em>12,0 a 25,0 ng/mL</em>
        </td>
		</tr>
		<tr>
		<td colspan="9">&nbsp;</td>
		</tr>
	<?php
	}
	if ($listar[_t4_livre] != 'Meketrefe')
	{
	?>
		<tr>
		<td><strong>T4 LIVRE:</strong></td>
		<td>&nbsp;</td>
		<td><strong><?php echo $listar[_t4_livre]; ?></strong></td>
		<td colspan="6"><strong>ng/dL</strong></td>
		</tr>
		<tr>
		<td class="textoM"><strong>Amostra:</strong></td>
		<td colspan="8" class="textoM"><em>Soro</em></td>
		</tr>
		<tr>
		<td class="textoM"><strong>M&eacute;todo:</strong></td>
		<td colspan="8" class="textoM"><em>RADIOIMUNOENSAIO</em></td>
		</tr>
		<tr>
		<td colspan="3">&nbsp;</td>
		<td colspan="6" class="textoM">
        <strong>Caninos:</strong> <em>0,80 a 2,00 ng/dL</em>
        <br />
        <strong>Felinos:</strong> <em>1,60 a 4,00 ng/dL</em>
        <br />
        <strong>Eq&uuml;inos:</strong> <em>1,2 a 1,8 ng/dL</em>
        </td>
		</tr>
		<tr>
		<td colspan="9">&nbsp;</td>
		</tr>
	<?php
	}
	if ($listar[_t4_livre_dialise] != 'Meketrefe'){
	?>
		<tr>
		<td colspan="2"><strong>T4 LIVRE por DI&Aacute;LISE:</strong></td>
		<td><strong><?php echo $listar[_t4_livre_dialise]; ?></strong></td>
		<td colspan="6"><strong>ng/dL</strong></td>
		</tr>
		<tr>
		<td class="textoM"><strong>Amostra:</strong></td>
		<td colspan="8" class="textoM"><em>Soro</em></td>
		</tr>
		<tr>
		<td class="textoM"><strong>M&eacute;todo:</strong></td>
		<td colspan="8" class="textoM"><em>RADIOIMUNOENSAIO</em></td>
		</tr>
		<tr>
		<td colspan="3">&nbsp;</td>
		<td colspan="6" class="textoM">
        <strong>Canino:</strong> <em>0,8 a 3,0</em>
        <br />
        <strong>Felino:</strong> <em>1,5 a 4,0</em>
        </td>
		</tr>
		<tr>
		<td colspan="9">&nbsp;</td>
		</tr>
	<?php
	}
	if ($listar[_t3_total] != 'Meketrefe')
	{
	?>
		<tr>
		<td><strong>T3 TOTAL:</strong></td>
		<td>&nbsp;</td>
		<td><strong><?php echo $listar[_t3_total]; ?></strong></td>
		<td colspan="6"><strong>ng/mL</strong></td>
		</tr>
		<tr>
		<td class="textoM"><strong>Amostra:</strong></td>
		<td colspan="8" class="textoM"><em>Soro</em></td>
		</tr>
		<tr>
		<td class="textoM"><strong>M&eacute;todo:</strong></td>
		<td colspan="8" class="textoM"><em>RADIOIMUNOENSAIO</em></td>
		</tr>
		<tr>
		<td colspan="3"></td>
		<td colspan="6" class="textoM">
        <strong>Caninos:</strong> <em>1,0 a 2,0 ng/mL </em>
        <br />
        <strong>Felinos:</strong> <em>0,3 a 0,9 ng/mL</em>
        </td>
		</tr>
		<tr>
		<td colspan="9">&nbsp;</td>
		</tr>
	<?php
	}
	if ($listar[_tsh] != 'Meketrefe')
	{
	?>
		<tr>
		<td><strong>TSH:</strong></td>
		<td>&nbsp;</td>
		<td><strong><?php echo $listar[_tsh]; ?></strong></td>
		<td colspan="6"><strong>ng/mL</strong></td>
		</tr>
		<tr>
		<td class="textoM"><strong>Amostra:</strong></td>
		<td colspan="8" class="textoM"><em>Soro</em></td>
		</tr>
		<tr>
		<td class="textoM"><strong>M&eacute;todo:</strong></td>
		<td colspan="8" class="textoM"><em>RADIOIMUNOENSAIO</em></td>
		</tr>
		<tr>
		<td colspan="3"></td>
		<td colspan="6" class="textoM">
        <strong>Canino</strong>: <em>0,04 a 0,40 ng/mL</em><br />
		<strong>Limite</strong>: <em>0,40 a 0,68 ng/mL</em></td>
		</tr>
		<tr>
		<td colspan="9">&nbsp;</td>
		</tr>
	<?php
	}
	/*
	if ($listar[_observacao] != 'Meketrefe')
	{
	?>
		<tr>
		<td colspan="3"><strong>Observação</strong></td>
		</tr>
		<tr>
		<td colspan="3" align="justify"><?php echo nl2br($listar[_observacao]); ?></td>
		</tr>
	<?php
	}
	*/
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
