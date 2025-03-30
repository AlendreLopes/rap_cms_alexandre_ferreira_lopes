<div class="corpo">
	
	<div class="cabecalho"></div>
	
	<div class="conteudo">
	
	<!-- Laudo -->
	
	<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
	
	<table width="840" border="0" cellpadding="0" cellspacing="0">
	
	<thead>
	
	<tr>
	<th width="110">&nbsp;</th>
	<th width="155">&nbsp;</th>
	<th width="75">&nbsp;</th>
	<th width="80">&nbsp;</th>
	<th width="75">&nbsp;</th>
	<th width="35">&nbsp;</th>
	<th width="45">&nbsp;</th>
	<th width="75">&nbsp;</th>
	<th width="35">&nbsp;</th>
	<th width="45">&nbsp;</th>
	<th width="110">&nbsp;</th>
	</tr>
	
	<tr>
	<th colspan="11">&nbsp;</th>
	</tr>
	
	<tr><th align="left"><strong>Protocolo:</strong></th>
	<th colspan="3" align="left"><span class="no_bold"><?php echo $Lista[_protocolo];?></span></th><th colspan="2" align="left" class="no_bold"><strong>Solicita&ccedil;&atilde;o:</strong></th>
	<th colspan="5" align="left"><span class="no_bold"><?php echo $Implode;?></span></th>
	</tr>
	
	<tr>
	<th align="left"><strong>Paciente:</strong></th>
	<th colspan="3" align="left"><span class="no_bold"><?php echo $Lista[_paciente];?></span></th>
	<th colspan="2" align="left" class="no_bold"><strong>Idade:</strong></th>
	<th colspan="5" align="left"><span class="no_bold"><?php echo $Lista[_idade];?></span></th>
	</tr>
	
	<tr>
	<th align="left"><strong>Esp&eacute;cie:</strong></th>
	<th colspan="3" align="left"><span class="no_bold"><?php echo $Lista[_especie];?></span></th>
	<th colspan="2" align="left" class="no_bold"><strong>Sexo:</strong></th>
	<th colspan="5" align="left"><span class="no_bold"><?php echo $Lista[_genero];?></span></th>
	</tr>
	
	<tr>
	<th align="left"><strong>Ra&ccedil;a:</strong></th>
	<th colspan="3" align="left"><span class="no_bold"><?php echo $Lista[_raca];?></span></th>
	<th colspan="2" align="left" class="no_bold"><strong>Propriet&aacute;rio:</strong></th>
	<th colspan="5" align="left"><span class="no_bold"><?php echo $Lista[_proprietario];?></span></th>
	</tr>
	
	<tr>
	<th align="left"><strong>Cl&iacute;nica:</strong></th>
	<th colspan="3" align="left"><span class="no_bold"><?php echo $Lista[_clinica_titulo];?></span></th>
	<th colspan="2" align="left" class="no_bold"><strong>Dr(a).:</strong></th>
	<th colspan="5" align="left"><span class="no_bold"><?php echo $Lista[_requisitante];?></span></th>
	</tr>
	
	<tr><th colspan="11">&nbsp;</th></tr>
	
	<tr>
	<th colspan="11">MEDIDA DA PRESS&Atilde;O ARTERIAL</th>
	</tr>
	
	<tr><th colspan="11">&nbsp;</th></tr>
	
	</thead>
	
	<tfoot>
	
	<tr>
    <th colspan="11">&nbsp;</th>
    </tr>
	<tr>
	<th colspan="11" align="right"><img alt="Dr&ordf; Danielle" title="Drª Danielle Tullio Murad" src="http://reports.petimagem.com.br/public/image/assinaturas/danielle.jpg" /></th>
    </tr>
    <tr>
      <th colspan="11" align="center" class="textoM">&ldquo;O resultado do presente exame n&atilde;o configura apresen&ccedil;a ou aus&ecirc;ncia de doen&ccedil;a devendo ser correlacionado com demais dados cl&iacute;nicos e exames complementares pertinentes ao caso.&rdquo;</th>
    </tr>
	<tr><th colspan="11">&nbsp;</th></tr>
	
	</tfoot>
	
    <!-- xxxxxxxxxx Conteudo xxxxxxxxxx -->
    <tbody>
	<tr>
	<td align="center">&nbsp;</td>
	<td align="center"><strong>Tomadas</strong></td>
	<td colspan="2" align="center"><strong>Sist&oacute;lica</strong></td>
	<td colspan="3" align="center"><strong>Diast&oacute;lica</strong></td>
	<td colspan="3" align="center"><strong>M&eacute;dia</strong></td>
	<td align="center">&nbsp;</td>
    </tr>
	<tr>
	<td align="center">&nbsp;</td>
	<td align="center"><strong>1</strong></td>
	<td align="center">
	<?php
	if($listar[_sistolica_1] != 'Meketrefe')
	{
		echo $listar[_sistolica_1];
	}
	?>
    </td>
	<td>mmHg</td>
	<td align="center">
	<?php
	if($listar[_diastolica_1] != 'Meketrefe')
	{
		echo $listar[_diastolica_1];
	}
	?></td>
	<td colspan="2">mmHg</td>
	<td align="center">
	<?php
	if($listar[_media_1] != 'Meketrefe')
	{
		echo $listar[_media_1];
	}
	?>
    </td>
	<td colspan="2">mmHg</td>
	<td>&nbsp;</td>
	</tr>
	<tr>
	<td align="center">&nbsp;</td>
	<td align="center"><strong>2</strong></td>
	<td align="center"><?php
	if($listar[_sistolica_2] != 'Meketrefe')
	{
		echo $listar[_sistolica_2];
	}
	?>
    </td>
	<td>mmHg</td>
	<td align="center">
	<?php
	if($listar[_diastolica_2] != 'Meketrefe')
	{
		echo $listar[_diastolica_2];
	}
	?>
    </td>
	<td colspan="2">mmHg</td>
	<td align="center">
	<?php
	if($listar[_media_2] != 'Meketrefe')
	{
		echo $listar[_media_2];
	}
	?>
    </td>
	<td colspan="2">mmHg</td>
	<td>&nbsp;</td>
	</tr>
	<tr>
	<td align="center">&nbsp;</td>
    <td align="center"><strong>3</strong></td>
    <td align="center"><?php
	if($listar[_sistolica_3] != 'Meketrefe')
	{
		echo $listar[_sistolica_3];
	}
	?>
    </td>
    <td>mmHg</td>
	<td align="center">
	<?php
	if($listar[_diastolica_3] != 'Meketrefe')
	{
		echo $listar[_diastolica_3];
	}
	?></td>
	<td colspan="2">mmHg</td>
	<td align="center">
	<?php
	if($listar[_media_3] != 'Meketrefe')
	{
		echo $listar[_media_3];
	}
	?>
    </td>
	<td colspan="2">mmHg</td>
	<td align="left">&nbsp;</td>
	</tr>
	<tr>
	<td align="center">&nbsp;</td>
    <td align="center"><strong>4</strong></td>
    <td align="center"><?php
	if($listar[_sistolica_4] != 'Meketrefe')
	{
		echo $listar[_sistolica_4];
	}
	?>
    </td>
    <td>mmHg</td>
	<td align="center">
	<?php
	if($listar[_diastolica_4] != 'Meketrefe')
	{
		echo $listar[_diastolica_4];
	}
	?>
    </td>
	<td colspan="2">mmHg</td>
	<td align="center">
	<?php
	if($listar[_media_4] != 'Meketrefe')
	{
		echo $listar[_media_4];
	}
	?>
    </td>
	<td colspan="2">mmHg</td>
	<td align="left">&nbsp;</td>
	</tr>
	<tr>
	<td align="center">&nbsp;</td>
    <td align="center"><strong>5</strong></td>
    <td align="center"><?php
	if($listar[_sistolica_5] != 'Meketrefe')
	{
		echo $listar[_sistolica_5];
	}
	?>
    </td>
    <td>mmHg</td>
	<td align="center">
	<?php
	if($listar[_diastolica_5] != 'Meketrefe')
	{
		echo $listar[_diastolica_5];
	}
	?>
    </td>
	<td colspan="2">mmHg</td>
	<td align="center">
	<?php
	if($listar[_media_5] != 'Meketrefe')
	{
		echo $listar[_media_5];
	}
	?>
    </td>
	<td colspan="2">mmHg</td>
	<td align="left">&nbsp;</td>
	</tr>
	<tr>
	<td colspan="11">&nbsp;</td>
	</tr>
	<?php
	if($listar[_interpretacao] != 'Meketrefe')
	{
		?>
		<tr>
			<td colspan="11"><strong>Interpreta&ccedil;&atilde;o:</strong></td>
		</tr>
		<tr>
			<td colspan="11"><?php echo nl2br($listar[_interpretacao]);?></td>
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
