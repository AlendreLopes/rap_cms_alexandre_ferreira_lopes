<div class="corpo">
	
		<div class="cabecalho"></div>
	
	<div class="conteudo">
	
	<!-- Laudo MPAs -->
	
	<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
	
	<?php include("application/controller/plugins/indexModeloProtocoloImpressao.php");?>
	
	<table width="840" border="0" cellpadding="0" cellspacing="0">
	<tr>
	<td colspan="11">&nbsp;</td>
	</tr>
	<tr>
	<th colspan="11">MEDIDA DA PRESS&Atilde;O ARTERIAL</th>
	</tr>
	<tr>
	<td colspan="11">&nbsp;</td>
	</tr>
	<tr>
	<th width="150">Tomadas</th>
	<td width="50">&nbsp;</td>
	<th colspan="2">Sist&oacute;lica</th>
	<td width="50">&nbsp;</td>
	<th colspan="2">Diast&oacute;lica</th>
	<td width="50">&nbsp;</td>
	<th colspan="2">M&eacute;dia</th>
	<td width="150">&nbsp;</td>
	</tr>
	<tr>
	<th>1</th>
	<td>&nbsp;</td>
	<th width="65">
	<?php
	if($listar[_sistolica_1] != 'Meketrefe')
	{
		echo $listar[_sistolica_1];
	}
	?>
	</th>
	<td width="65">mmHg</td>
	<td align="left">&nbsp;</td>
	<th width="65">
	<?php
	if($listar[_diastolica_1] != 'Meketrefe')
	{
		echo $listar[_diastolica_1];
	}
	?>
	</th>
	<td width="65">mmHg</td>
	<td align="left">&nbsp;</td>
	<th width="65">
	<?php
	if($listar[_media_1] != 'Meketrefe')
	{
		echo $listar[_media_1];
	}
	?>
	</th>
	<td width="65">mmHg</td>
	<td align="left">&nbsp;</td>
	</tr>
	<tr>
	<th>2</th>
	<td>&nbsp;</td>
	<th>
	<?php
	if($listar[_sistolica_2] != 'Meketrefe')
	{
		echo $listar[_sistolica_2];
	}
	?>
	</th>
	<td>mmHg</td>
	<td align="left">&nbsp;</td>
	<th>
	<?php
	if($listar[_diastolica_2] != 'Meketrefe')
	{
		echo $listar[_diastolica_2];
	}
	?>
	</th>
	<td>mmHg</td>
	<td align="left">&nbsp;</td>
	<th>
	<?php
	if($listar[_media_2] != 'Meketrefe')
	{
		echo $listar[_media_2];
	}
	?>
	</th>
	<td>mmHg</td>
	<td align="left">&nbsp;</td>
	</tr>
	<tr>
	<th>3</th>
	<td>&nbsp;</td>
	<th>
	<?php
	if($listar[_sistolica_3] != 'Meketrefe')
	{
		echo $listar[_sistolica_3];
	}
	?>
	</th>
	<td>mmHg</td>
	<td align="left">&nbsp;</td>
	<th>
	<?php
	if($listar[_diastolica_3] != 'Meketrefe')
	{
		echo $listar[_diastolica_3];
	}
	?>
	</th>
	<td>mmHg</td>
	<td align="left">&nbsp;</td>
	<th>
	<?php
	if($listar[_media_3] != 'Meketrefe')
	{
		echo $listar[_media_3];
	}
	?>
	</th>
	<td>mmHg</td>
	<td align="left">&nbsp;</td>
	</tr>
	<tr>
	<th>4</th>
	<td>&nbsp;</td>
	<th>
	<?php
	if($listar[_sistolica_4] != 'Meketrefe')
	{
		echo $listar[_sistolica_4];
	}
	?>
	</th>
	<td>mmHg</td>
	<td align="left">&nbsp;</td>
	<th>
	<?php
	if($listar[_diastolica_4] != 'Meketrefe')
	{
		echo $listar[_diastolica_4];
	}
	?>
	</th>
	<td>mmHg</td>
	<td align="left">&nbsp;</td>
	<th>
	<?php
	if($listar[_media_4] != 'Meketrefe')
	{
		echo $listar[_media_4];
	}
	?>
	</th>
	<td>mmHg</td>
	<td align="left">&nbsp;</td>
	</tr>
	<tr>
	<th>5</th>
	<td>&nbsp;</td>
	<th>
	<?php
	if($listar[_sistolica_5] != 'Meketrefe')
	{
		echo $listar[_sistolica_5];
	}
	?>
	</th>
	<td>mmHg</td>
	<td align="left">&nbsp;</td>
	<th>
	<?php
	if($listar[_diastolica_5] != 'Meketrefe')
	{
		echo $listar[_diastolica_5];
	}
	?>
	</th>
	<td>mmHg</td>
	<td align="left">&nbsp;</td>
	<th>
	<?php
	if($listar[_media_5] != 'Meketrefe')
	{
		echo $listar[_media_5];
	}
	?>
	</th>
	<td>mmHg</td>
	<td align="left">&nbsp;</td>
	</tr>
	<tr>
	<td colspan="11">&nbsp;</td>
	</tr>
	</table>
	
	<table width="840" border="0" cellpadding="0" cellspacing="0">
	<?php
	if($listar[_interpretacao] != 'Meketrefe')
	{
	?>
	<tr>
	<td><strong>Interpreta&ccedil;&atilde;o:</strong></td>
	</tr>
	<tr>
	  <td><?php echo nl2br($listar[_interpretacao]);?></td>
	  </tr>
	<?php
	}
	?>
	</table>
	
	<table width="840" border="0" cellspacing="0" cellpadding="0">
	<tr>
	<td width="840">&nbsp;</td>
	</tr>
    <tr>
    <td align="right"><img alt="Dr&ordf; Danielle" title="Drª Danielle Tullio Murad" src="http://reports.petimagem.com.br/public/image/assinaturas/danielle.jpg" /></td>
    </tr>
	<tr>
	<td width="840">&nbsp;</td>
	</tr>
	<tr>
	<td align="justify" class="textoM">&ldquo;O resultado do presente exame n&atilde;o configura apresen&ccedil;a ou aus&ecirc;ncia de doen&ccedil;a devendo ser correlacionado com demais dados cl&iacute;nicos e exames complementares pertinentes ao caso.&rdquo;</td>
	</tr>
    </table>
	
	<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
    
	</div>
	
	<div class="rodape">
	
	<strong><?php echo 'Curitiba, ' . Functions::dia_da_semana() . ' '.date('d').' de ' . Functions::retorna_mes(date('n')) . ' de '.date('Y');?></strong>
	
	</div>
	
</div>

<div class="ppagina"></div>