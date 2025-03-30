<div class="corpo">
	
	<div class="cabecalho"></div>
	
	<div class="conteudo">
	
	<!-- Laudo -->
	
	<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
	
	<table width="840" border="0" cellpadding="0" cellspacing="0">
	
	<thead>
	
	<tr>
	<th width="35">&nbsp;</th>
	<th width="70">&nbsp;</th>
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
	
	<tr><th colspan="2" align="left"><strong>Paciente:</strong></th>
	<th colspan="3" align="left"><span class="no_bold"><?php echo $Lista[_paciente];?></span></th>
<th colspan="2" align="left"><strong>Idade:</strong></th>
	<th colspan="2" align="left" class="no_bold"><?php echo $Lista[_idade];?></th>
	</tr>
	
	<tr><th colspan="2" align="left"><strong>Esp&eacute;cie:</strong></th>
	<th colspan="3" align="left"><span class="no_bold"><?php echo $Lista[_especie];?></span></th>
<th colspan="2" align="left"><strong>Sexo:</strong></th>
	<th colspan="2" align="left" class="no_bold"><?php echo $Lista[_genero];?></th>
	</tr>
	
	<tr><th colspan="2" align="left"><strong>Ra&ccedil;a:</strong></th>
	<th colspan="3" align="left"><span class="no_bold"><?php echo $Lista[_raca];?></span></th>
<th colspan="2" align="left"><strong>Propriet&aacute;rio:</strong></th>
	<th colspan="2" align="left" class="no_bold"><?php echo $Lista[_proprietario];?></th>
	</tr>
	
	<tr><th colspan="2" align="left"><strong>Cl&iacute;nica:</strong></th>
	<th colspan="3" align="left"><span class="no_bold"><?php echo $Lista[_clinica_titulo];?></span></th>
<th colspan="2" align="left"><strong>Dr(a).:</strong></th>
	<th colspan="2" align="left" class="no_bold"><?php echo $Lista[_requisitante];?></th>
	</tr>
	
	<tr><th colspan="9">&nbsp;</th></tr>
	
	<tr>
	<th colspan="9">LEISHMANIOSE IGg</th>
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
	if($listar[_observacao] != 'Meketrefe')
	{
	?>
		<tr>
		<td>&nbsp;</td>
		<td colspan="8"><?php echo nl2br($listar[_observacao]);?></td>
		</tr>
		<tr><td colspan="9">&nbsp;</td></tr>
        <tr>
        <td>&nbsp;</td>
        <td colspan="8">
          <strong>Valores de refer&ecirc;ncia</strong>:
          <br />
          <em>- Reagente</em> <br />
          1-ELISA: valor acima da linha de corte recomendado pelo fabricante do kit. <br />
          2-RIFI: Resultado com t&iacute;tulo igual ou superior &agrave; dilui&ccedil;&atilde;o 1:40 <br />
          <em>- Indeterminado</em>
          <br />
          Resultados com valores limites que os testes n&atilde;o forem capazes de determinar como reagente ou n&atilde;o-reagente. Recomenda-se um novo teste ap&oacute;s 30 dias do &uacute;ltimo exame. Pode corresponder ao in&iacute;cio da soroconvers&atilde;o, rea&ccedil;&otilde;es cruzadas ou inespec&iacute;ficas, fal&ecirc;ncia do sistema imune.
          <br />
          <em>- N&atilde;o-reagente</em>
          <br />
          Resultado sem t&iacute;tulos de anticorpos.
          <br />
          <strong>Nota</strong>:
          <br />
          O LAUDO est&aacute; sujeito, embora RARAMENTE, a ocorr&ecirc;ncia de falso-negativo e falso-positivo, que &eacute; uma caracter&iacute;stica de varia&ccedil;&otilde;es pr&eacute;-anal&iacute;ticas e das metodologias. Sugerimos o acompanhamento M&eacute;dico Veterin&aacute;rio dos sinais e sintomas cl&iacute;nicos.
          <br />
          <strong>Aviso importante</strong>:
          <br />
          As duas t&eacute;cnicas sorol&oacute;gicas s&atilde;o recomendadas pelo Minist&eacute;rio da Sa&uacute;de para o diagn&oacute;stico da Leishmaniose Visceral Canina. Em caso de diverg&ecirc;ncias entre as duas t&eacute;cnicas, considera-se o RIFI como confirmat&oacute;rio.
          <br />
          <strong>Fonte</strong>:
          <br />
          Minist&eacute;rio da Sa&uacute;de &ndash; Manual de Vigil&acirc;ncia e controle da Leishmaniose Visceral Canina. P.28-29, 2003.
          <br />
          <a href="http://www.saude.gov.br/editora/livros" target="_blank">(www.saude.gov.br/editora/livros)</a>        </td>
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
