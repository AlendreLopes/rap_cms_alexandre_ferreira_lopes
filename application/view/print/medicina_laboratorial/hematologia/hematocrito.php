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
	<th width="82">&nbsp;</th>
	<th width="83">&nbsp;</th>
	<th width="82">&nbsp;</th>
	<th width="28">&nbsp;</th>
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
	<th colspan="8">HEMAT&Oacute;CRITO</th>
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
	if($listar[_hematocrito] != 'Meketrefe')
	{
	?>
		<tr>
		<td class="textoM"><strong>Amostra:</strong></td>
		<td colspan="7" class="textoM"><em>Sangue com anticoagulante</em></td>
        </tr>
		<?php
        if($listar[_hematocrito_metodo] != 'Meketrefe')
        {
        ?>
            <tr>
            <td class="textoM"><strong>M&eacute;todo:</strong></td>
            <td colspan="7" class="textoM"><em><?php echo $listar[_hematocrito_metodo];?></em></td>
            </tr>
		<?php
		}
        ?>
		<tr>
		<td><strong>Hemat&oacute;crito: </strong></td>
		<td><?php echo $listar[_hematocrito];?></td>
		<td><strong>%</strong></td>
		<td colspan="5">&nbsp;</td>
		</tr>
        <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td align="center" class="textoM"><strong>Canino</strong></td>
        <td align="center" class="textoM"><strong>Felino</strong></td>
        <td align="center" class="textoM"><strong>Eq&uuml;ino</strong></td>
        <td colspan="4">&nbsp;</td>
        </tr>
        <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td align="center" class="textoM">37 a 55</td>
        <td align="center" class="textoM">24 a 45</td>
        <td align="center" class="textoM">32 – 50</td>
        <td colspan="4">&nbsp;</td>
		</tr>
        <tr><td colspan="8">&nbsp;</td></tr>
		<?php
	}
    if($listar[_hematocrito_observacao] != 'Meketrefe')
    {
        ?>
        <tr>
        <td colspan="8"><strong>Observa&ccedil;&atilde;o:</strong></td>
        </tr>
        <tr>
            <td colspan="8" align="justify"><?php echo nl2br($listar[_hematocrito_observacao]);?></td>
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
