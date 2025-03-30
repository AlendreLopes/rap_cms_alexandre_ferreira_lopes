<div class="corpo">
	
	<div class="cabecalho"></div>
	
	<div class="conteudo">
	
	<!-- Laudo -->
	
	<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
	
	<table width="840" border="0" cellpadding="0" cellspacing="0">
	
	<thead>
	
	<tr>
	<th width="105">&nbsp;</th>
	<th width="80">&nbsp;</th>
	<th width="70">&nbsp;</th>
	<th width="65">&nbsp;</th>
	<th width="100">&nbsp;</th>
	<th width="110">&nbsp;</th>
	<th width="155">&nbsp;</th>
	<th width="155">&nbsp;</th>
	</tr>
	
	<tr>
	<th colspan="8">&nbsp;</th>
	</tr>
	
	<tr><th align="left"><strong>Protocolo:</strong></th>
	<th colspan="3" align="left"><span class="no_bold"><?php echo $Lista[_protocolo];?></span></th><th align="left"><strong>Solicita&ccedil;&atilde;o:</strong></th>
	<th colspan="2" align="left" class="no_bold"><?php echo $Implode;?></th>
	</tr>
	
	<tr>
	<th align="left"><strong>Paciente:</strong></th>
	<th colspan="2" align="left"><span class="no_bold"><?php echo $Lista[_paciente];?></span></th>
	<th colspan="2" class="no_bold" align="left">&nbsp;</th>
	<th align="left"><strong>Idade:</strong></th>
	<th colspan="2" align="left" class="no_bold"><?php echo $Lista[_idade];?></th>
	</tr>
	
	<tr>
	<th align="left"><strong>Esp&eacute;cie:</strong></th>
	<th colspan="2" align="left"><span class="no_bold"><?php echo $Lista[_especie];?></span></th>
	<th colspan="2" class="no_bold" align="left">&nbsp;</th>
	<th align="left"><strong>Sexo:</strong></th>
	<th colspan="2" align="left" class="no_bold"><?php echo $Lista[_genero];?></th>
	</tr>
	
	<tr>
	<th align="left"><strong>Ra&ccedil;a:</strong></th>
	<th colspan="2" align="left"><span class="no_bold"><?php echo $Lista[_raca];?></span></th>
	<th colspan="2" class="no_bold" align="left">&nbsp;</th>
	<th align="left"><strong>Propriet&aacute;rio:</strong></th>
	<th colspan="2" align="left" class="no_bold"><?php echo $Lista[_proprietario];?></th>
	</tr>
	
	<tr>
	<th align="left"><strong>Cl&iacute;nica:</strong></th>
	<th colspan="2" align="left"><span class="no_bold"><?php echo $Lista[_clinica_titulo];?></span></th>
	<th colspan="2" class="no_bold" align="left">&nbsp;</th>
	<th align="left"><strong>Dr(a).:</strong></th>
	<th colspan="2" align="left" class="no_bold"><?php echo $Lista[_requisitante];?></th>
	</tr>
	
	<tr><th colspan="8">&nbsp;</th></tr>
	
	<tr>
	<th colspan="8">ENDOCRINOLOGIA</th>
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
	if ($listar[_acth] != 'Meketrefe'){
	?>
		<tr>
		<td colspan="2"><strong>ACTH:</strong></td>
		<td><strong><?php echo $listar[_acth]; ?></strong></td>
		<td colspan="5"><strong>pg/mL</strong></td>
		</tr>
		<tr>
		<td colspan="1" class="textoM"><strong>Amostra:</strong></td>
        <td colspan="7"><em>Plasma</em></td>
		</tr>
		<tr>
		<td colspan="1" class="textoM"><strong>M&eacute;todo:</strong></td>
        <td colspan="7" class="textoM"><em>Quimioluminesc&ecirc;ncia</em></td>
		</tr>
		<tr>
		  <td colspan="3">&nbsp;</td>
		  <td colspan="5" class="textoM">
          <strong>Canino:</strong><em> 20 a 100</em>
          <br />
	      <strong>Felino:</strong><em> 20 a 100</em>
          </td>
	    </tr>
		<tr>
		  <td colspan="8">&nbsp;</td>
	    </tr>
	<?php
	}
	/*
	if ($listar[_cortisol] != 'Meketrefe'){
	?>
		<tr>
		<td colspan="3" class="textoM"><strong>Amostra: <em>Soro</em></strong></td>
		</tr>
		<tr>
		<td colspan="3" class="textoM"><strong>M&eacute;todo: <em>Quimioluminesc&ecirc;ncia</em></strong></td>
		</tr>
		<tr>
		<td><strong>Cortisol:</strong></td>
		<td><strong><?php echo $listar[_cortisol_b]; ?></strong></td>
		<td><strong>ug/mL</strong></td>
		</tr>
		<tr>
		<td colspan="2">&nbsp;</td>
		<td class="textoM"><strong>Canino:</strong> <em>0,5 a 5,5<br /><strong>Felino:</strong> <em>1,0 a 4,5</em></td>
		</tr>
		<tr>
		<td valign="top"  class="textoM"><strong>M&eacute;todo: <em>Quimioluminesc&ecirc;ncia</em></strong></td>
		</tr>
		<?php
		if(($listar[_cortisol_4_h] != 'Meketrefe') or ($listar[_cortisol_8_h] != 'Meketrefe'))
		{
		?>
			<tr>
			<td colspan="3">
			<?php echo $Cortisol = (($listar[_cortisol_4_h] != 'Meketrefe')) ? "<strong>Cortisol 4 Horas</strong> " . $listar[_cortisol_8_h] : "<strong>Cortisol 8 Horas</strong> " . $listar[_cortisol_8_h];
 ?>
			</td>
			</tr>
		<?php
		}
		if(($listar[_cortisol_4_h] != 'Meketrefe') or ($listar[_cortisol_8_h] != 'Meketrefe'))
		{
		?>
			<tr>
			<td colspan="3"><strong>Observa&ccedil;&atilde;o</strong></td>
			</tr>
			<tr>
			<td colspan="3" align="justify"><?php echo nl2br($listar[_cortisol_observacao]); ?></td>
			</tr>
		<?php
		}
	}
	*/
	if ($listar[_estradiol] != 'Meketrefe'){
	?>
		<tr>
		<td colspan="2"><strong>ESTRADIOL:</strong></td>
		<td><strong><?php echo $listar[_estradiol]; ?></strong></td>
		<td colspan="5"><strong>pg/mL</strong></td>
		</tr>
		<tr>
		<td colspan="1" class="textoM"><strong>Amostra:</strong></td>
        <td colspan="7"><em>Soro</em></td>
        </tr>
        <tr>
		<td colspan="1" class="textoM"><strong>M&eacute;todo:</strong></td>
        <td colspan="7"><em>Quimioluminesc&ecirc;ncia</em></td>
		</tr>
		<tr>
		  <td colspan="3">&nbsp;</td>
		  <td colspan="5" class="textoM">
          <strong>Canino:</strong>
          <br />
          Proestro:<em> 25,0 a 100,0</em>
          <br />
          Estro:<em> 25,0 a 100,0</em>
          <br />
          Diestro:<em> 0,5 a 10,0</em>
          <br />
          Anestro: <em>0,5 a 10,0</em>
          <br />
          Machos: <em>20,0</em>
          </td>
	    </tr>
		<tr>
		  <td colspan="8">&nbsp;</td>
	    </tr>
	<?php
	}
	if ($listar[_insulina] != 'Meketrefe'){
	?>
		<tr>
		<td colspan="2"><strong>INSULINA:</strong></td>
		<td><strong><?php echo $listar[_insulina]; ?></strong></td>
		<td colspan="5"><strong>uU/mL</strong></td>
		</tr>
		<tr>
		<td class="textoM"><strong>Amostra:</strong></td>
		<td colspan="7" class="textoM"><em>Soro</em></td>
		</tr>
		<tr>
		<td class="textoM"><strong>M&eacute;todo:</strong></td>
		<td colspan="7" class="textoM"><em>Quimioluminesc&ecirc;ncia</em></td>
		</tr> 
		<tr>
		  <td colspan="3" valign="bottom">&nbsp;</td>
		  <td colspan="5" class="textoM"><strong>Canino:</strong><em> 6 a 27<br />
	      <strong>Felino:</strong><em> 2,0 a 10,0</em>		  </em></td>
	    </tr>
		<!--
		<tr>
		<td><strong>INSULINA : GLICOSE</strong></td>
		<td><strong><?php // echo $listar[_insulina_glicose]; ?></strong></td>
        <td>&nbsp;</td>
		</tr>
		<tr>
		<td colspan="2">&nbsp;</td>
		<td class="textoM"><strong>Canino:</strong> <em>0,2 a 0,3</em></td>
		</tr>
        -->
		<tr>
		<td colspan="8">&nbsp;</td>
		</tr>
	<?php
	}
	if ($listar[_progesterona] != 'Meketrefe'){
	?>
		<tr>
		<td colspan="2"><strong>PROGESTERONA:</strong></td>
		<td><strong><?php echo $listar[_progesterona]; ?></strong></td>
		<td colspan="5"><strong>ng/mL</strong></td>
		</tr>
		<tr>
		<td class="textoM"><strong>Amostra:</strong></td>
		<td colspan="7" class="textoM"><em>Soro</em></td>
		</tr>
		<tr>
		<td class="textoM"><strong>M&eacute;todo:</strong></td>
		<td colspan="7" class="textoM"><em>Quimioluminesc&ecirc;ncia automatizada</em></td>
		</tr>
		<tr>
		<td colspan="3">&nbsp;</td>
		<td colspan="5" class="textoM">
        <strong>Canino:</strong>
        <br />
        F&ecirc;meas em anestro: <em>< 1,0</em><br />
        F&ecirc;meas em proestro: <em>1,0 a 3,0</em><br />
        F&ecirc;meas em estro: <em>3,0 a 10,0</em><br />
        F&ecirc;meas em diestro/gesta&ccedil;&atilde;o: <em>> 10,0</em><br />
        Macho: <em>< 0,4</em><br />
        <strong>Felino:</strong>
        <br />
        F&ecirc;meas em estro/anestro: <em>< 1,0</em><br />
        F&ecirc;meas em gesta&ccedil;&atilde;o/falsa gesta&ccedil;&atilde;o: <em>> 5,0</em><br />
        Macho: <em>< 0,2</em><br />
        Macho castrado: n&atilde;o avaliado
        <br />
        <strong>Eq&uuml;inos:</strong>
        <br />
        Estro/anestro: <em>menor que 1,0 ng/mL</em><br />
        Diestro:<em> maior que 5,0 ng/mL</em><br />
        Macho: <em>menor que 0,2 ng/mL</em><br />
        Macho castrado: <em>n&atilde;o avaliado</em></td>
		</tr>
		<tr>
		<td colspan="8">&nbsp;</td>
		</tr>
	<?php
	}
	if ($listar[_t3] != 'Meketrefe'){
	?>
		<tr>
		<td colspan="2"><strong>T3 TOTAL Veterinário:</strong></td>
		<td><strong><?php echo $listar[_t3]; ?></strong></td>
		<td colspan="5"><strong>ng/nL</strong></td>
		</tr>
		<tr>
		<td class="textoM"><strong>Amostra:</strong></td>
		<td colspan="7" class="textoM"><em>Soro</em></td>
		</tr>
		<tr>
		<td class="textoM"><strong>M&eacute;todo:</strong></td>
		<td colspan="7" class="textoM"><em>Quimioluminesc&ecirc;ncia</em></td>
		</tr> 
		<tr>
		<td colspan="3">&nbsp;</td>
		<td colspan="5" class="textoM">
        <strong>Canino:</strong> <em>0,45 a 1,10</em>
        <br />
        <strong>Felino:</strong> <em>0,40 a 1.10</em>
        <br />
        <strong>Eq&uuml;inos:</strong> <em>30 a 115</em>
        </td>
		</tr>
		<tr>
		<td colspan="8">&nbsp;</td>
		</tr>
	<?php
	}
	/*
	if ($listar[_t4_dialise] != 'Meketrefe'){
	?>
		<!--
		<tr>
		<td><strong>T4 LIVRE por DI&Aacute;LISE:</strong></td>
		<td><strong><?php // echo $listar[_t4_dialise]; ?></strong></td>
		<td><strong>ng/dL</strong></td>
		</tr>
		<tr>
		<td colspan="3" class="textoM"><strong>Amostra:</strong> <em>Soro</em></td>
		</tr>
		<tr>
		<td colspan="3" class="textoM"><strong>M&eacute;todo:</strong> <em>Radioimunoensaio</em></td>
		</tr>
		<tr>
		<td colspan="2">&nbsp;</td>
		<td class="textoM">
        <strong>Canino:</strong> <em>0,8 a 3,0</em>
        <br />
        <strong>Felino:</strong> <em>1,5 a 4,0</em>
        </td>
		</tr>
		<tr>
		<td colspan="3">&nbsp;</td>
		</tr>
		-->
	<?php
	}
	*/
	if ($listar[_t4_livre] != 'Meketrefe'){
	?>
		<tr>
		<td colspan="2"><strong>T4 LIVRE:</strong></td>
		<td><strong><?php echo $listar[_t4_livre]; ?></strong></td>
		<td colspan="5"><strong>ng/dL</strong></td>
		</tr>
		<tr>
		<td class="textoM"><strong>Amostra:</strong></td>
		<td colspan="7" class="textoM"><em>Soro</em></td>
		</tr>
		<tr>
		<td class="textoM"><strong>M&eacute;todo:</strong></td>
		<td colspan="7" class="textoM"><em>Quimioluminesc&ecirc;ncia</em></td>
		</tr> 
		<tr>
		<td colspan="3"></td>
		<td colspan="5" class="textoM">
        <strong>Canino:</strong> <em>0,5 a 1,6</em>
        <br />
        <strong>Felino:</strong> <em>1,0 a 3,0</em>
        <br />
        <strong>Eq&uuml;inos:</strong> <em>1,2 a 1,8</em>
        </td>
		</tr>
		<tr>
		<td colspan="8">&nbsp;</td>
		</tr>
	<?php
	}
	if ($listar[_t4_total] != 'Meketrefe'){
	?>
		<tr>
		<td colspan="2"><strong>T4 TOTAL Veterinário:</strong></td>
		<td><strong><?php echo $listar[_t4_total]; ?></strong></td>
		<td colspan="5"><strong>mcg/dL</strong></td>
		</tr>
		<tr>
		<td class="textoM"><strong>Amostra:</strong></td>
		<td colspan="7" class="textoM"><em>Soro</em></td>
		</tr>
		<tr>
		<td class="textoM"><strong>M&eacute;todo:</strong></td>
		<td colspan="7" class="textoM"><em>Quimioluminesc&ecirc;ncia</em></td>
		</tr> 
		<tr>
		<td colspan="3"></td>
		<td colspan="5" class="textoM">
        <strong>Canino:</strong> <em>1,2 a 4,0</em>
        <br />
        <strong>Felino:</strong> <em>1,2 a 4,8</em>
        <br />
        <strong>Eq&uuml;inos:</strong> <em>2,5 a 4,5</em>
        </td>
		</tr>
		<tr>
		<td colspan="8">&nbsp;</td>
		</tr>
	<?php
	}
	if ($listar[_testosterona] != 'Meketrefe'){
	?>
		<tr>
		<td colspan="2"><strong>TESTOSTERONA:</strong></td>
		<td><strong><?php echo $listar[_testorterona]; ?></strong></td>
		<td colspan="5"><strong>ng/mL</strong></td>
		</tr>
		<tr>
		<td class="textoM"><strong>Amostra:</strong></td>
		<td colspan="7" class="textoM"><em>Soro</em></td>
		</tr>
		<tr>
		<td class="textoM"><strong>M&eacute;todo:</strong></td>
		<td colspan="7" class="textoM"><em>Quimioluminesc&ecirc;ncia</em></td>
		</tr> 
		<tr>
		<td colspan="3"></td>
		<td colspan="5" class="textoM">
        <strong>Caninos:</strong>
        <br />
        Macho: <em>1,0 a 7,0 ng/mL</em><br />
        Castrado: <em>menor que 0,2 ng/mL</em><br />
        F&ecirc;mea: <em>menor que 0,2 ng/mL</em><br />
        <strong>Felinos:</strong>
        <br />
        Macho: <em>1,0 a 6,0 ng/mL</em><br />
        Castrado:
        <br />
        Macho: <em>menor que 0,5 ng/mL</em><br />
        F&ecirc;mea: <em>menor que 0,2 ng/mL</em><br />
        <strong>Eq&uuml;inos:</strong>
        <br />
        Macho servindo: <em>1,0 a 4,0 ng/mL</em><br />
        Macho sem servir: <em>menor que 1,0 ng/mL</em><br />
        Castrado: <em>menor que 0,2 ng/mL</em><br />
        F&ecirc;mea: <em>menor que 0,1 ng/mL</em></td>
		</tr>
		<tr>
		<td colspan="8">&nbsp;</td>
		</tr>
	<?php
	}
	if ($listar[_tsh] != 'Meketrefe'){
	?>
		<tr>
		<td colspan="2"><strong>TSH:</strong></td>
		<td><strong><?php echo $listar[_tsh]; ?></strong></td>
		<td colspan="5"><strong>ng/mL</strong></td>
		</tr>
		<tr>
		<td class="textoM"><strong>Amostra:</strong></td>
		<td colspan="7" class="textoM"><em>Soro</em></td>
		</tr>
		<tr>
		<td class="textoM"><strong>M&eacute;todo:</strong></td>
		<td colspan="7" class="textoM"><em>Quimioluminesc&ecirc;ncia</em></td>
		</tr> 
		<tr>
		<td colspan="3"></td>
		<td colspan="5" class="textoM">
        <strong>Canino:</strong> <em>0,04 a 0,40</em>
        <br />
        <strong>Felino:</strong> <em>0.05 a 0,50</em></td>
		</tr>
		<tr>
		<td colspan="8">&nbsp;</td>
		</tr>
	<?php
	}
	if ($listar[_observacao] != 'Meketrefe'){
	?>
		<tr>
		<td colspan="8"><strong>Observa&ccedil;&atilde;o</strong></td>
		</tr>
		<tr>
		<td colspan="8" align="justify"><?php echo nl2br($listar[_observacao]); ?></td>
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
