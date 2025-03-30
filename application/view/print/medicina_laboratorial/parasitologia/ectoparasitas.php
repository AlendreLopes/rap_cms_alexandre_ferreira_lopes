<div class="corpo">
	
	<div class="cabecalho"></div>
	
	<div class="conteudo">
	
	<!-- Laudo -->
	
	<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
	
	<table width="840" border="0" cellpadding="0" cellspacing="0">
	
	<thead>
	
	<tr>
	<th width="50">&nbsp;</th>
	<th width="55">&nbsp;</th>
	<th width="150">&nbsp;</th>
	<th width="60">&nbsp;</th>
	<th width="105">&nbsp;</th>
	<th width="75">&nbsp;</th>
	<th width="35">&nbsp;</th>
	<th width="110">&nbsp;</th>
	<th width="200">&nbsp;</th>
	</tr>
	
	<tr>
	<th colspan="9">&nbsp;</th>
	</tr>
	
	<tr><th colspan="2" align="left"><strong>Protocolo:</strong></th>
	<th colspan="3" align="left"><span class="no_bold"><?php echo $Lista[_protocolo];?></span></th><th colspan="2" align="left"><strong>Solicita&ccedil;&atilde;o:</strong></th>
	<th colspan="2" align="left" class="no_bold"><?php echo $Implode;?></th>
	</tr>
	
	<tr>	<th colspan="2" align="left"><strong>Paciente:</strong></th>
	<th colspan="3" align="left"><span class="no_bold"><?php echo $Lista[_paciente];?></span></th>
<th colspan="2" align="left"><strong>Idade:</strong></th>
	<th colspan="2" align="left" class="no_bold"><?php echo $Lista[_idade];?></th>
	</tr>
	
	<tr>	<th colspan="2" align="left"><strong>Esp&eacute;cie:</strong></th>
	<th colspan="3" align="left"><span class="no_bold"><?php echo $Lista[_especie];?></span></th>
<th colspan="2" align="left"><strong>Sexo:</strong></th>
	<th colspan="2" align="left" class="no_bold"><?php echo $Lista[_genero];?></th>
	</tr>
	
	<tr>	<th colspan="2" align="left"><strong>Ra&ccedil;a:</strong></th>
	<th colspan="3" align="left"><span class="no_bold"><?php echo $Lista[_raca];?></span></th>
<th colspan="2" align="left"><strong>Propriet&aacute;rio:</strong></th>
	<th colspan="2" align="left" class="no_bold"><?php echo $Lista[_proprietario];?></th>
	</tr>
	
	<tr>	<th colspan="2" align="left"><strong>Cl&iacute;nica:</strong></th>
	<th colspan="3" align="left"><span class="no_bold"><?php echo $Lista[_clinica_titulo];?></span></th>
<th colspan="2" align="left"><strong>Dr(a).:</strong></th>
	<th colspan="2" align="left" class="no_bold"><?php echo $Lista[_requisitante];?></th>
	</tr>
	
	<tr><th colspan="9">&nbsp;</th></tr>
	
	<tr>
	  <th colspan="9">ECTOPARASITAS</th>
	  </tr>
	<tr>
	<th colspan="9"><strong>PARASITOL&Oacute;GICO DE PELE E PESQUISA DE FUNGOS</strong></th>
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
	if($listar[_amostra] != 'Meketrefe')
	{
            ?>
            <tr>
            <td>&nbsp;</td>
            <td colspan="2"><strong>Amostra</strong></td>
            <td colspan="6"><?php echo $listar[_amostra];?></td>
            </tr>
            <?php
	}
	if($listar[_demodex] != 'Meketrefe')
	{
            ?>
            <tr>
            <td>&nbsp;</td>
            <td colspan="2"><strong><em>Demodex sp</em></strong></td>
            <td colspan="6"><?php echo $listar[_demodex];?></td>
            </tr>
            <?php
	}
	if($listar[_sarcoptes] != 'Meketrefe')
	{
            ?>
            <tr>
            <td>&nbsp;</td>
            <td colspan="2"><strong><em>Sarcoptes sp</em></strong></td>
            <td colspan="6"><?php echo $listar[_sarcoptes];?></td>
            </tr>
            <?php
	}
	if($listar[_artorsporos] != 'Meketrefe')
	{
            ?>
            <tr>
            <td>&nbsp;</td>
            <td colspan="2"><strong>Hifas em raiz de pelo</strong></td>
            <td colspan="6"><?php echo $listar[_artorsporos];?></td>
            </tr>
            <?php
	}
	if($listar[_outros] != 'Meketrefe')
	{
            ?>
            <tr><td colspan="9">&nbsp;</td></tr>
            <tr>
            <td colspan="9"><strong>Outros</strong></td>
            </tr>
            <tr>
            <td colspan="9"><?php echo nl2br($listar[_outros]);?></td>
            </tr>
            <?php
	}
	if($listar[_observacao] != 'Meketrefe')
	{
            ?>
            <tr><td colspan="9">&nbsp;</td></tr>
            <tr>
            <td colspan="9"><strong>Observa&ccedil;&atilde;o</strong></td>
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
