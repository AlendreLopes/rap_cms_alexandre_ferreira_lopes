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
	<th width="60">&nbsp;</th>
	<th width="105">&nbsp;</th>
	<th width="75">&nbsp;</th>
	<th width="35">&nbsp;</th>
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
	<th colspan="8">ENDOSCOPIA</th>
	</tr>
	
	<tr><th colspan="8">&nbsp;</th></tr>
	
	</thead>
	
	<tfoot>
	
	<tr>
	  <th colspan="8" align="right"><img src="http://reports.petimagem.com.br/public/image/assinaturas/assinatura_padrao.jpg" alt="Dr&ordf; Pet Imagem" width="150" height="120" /></th>
	  </tr>
	<tr>
	  <th colspan="8" align="center" class="textoM">&ldquo;O Resultado do presente LAUDO n&atilde;o configura apresen&ccedil;a ou aus&ecirc;ncia de doen&ccedil;a devendo ser correlacionado com demais dados	cl&iacute;nicos e exames complementares pertinentes ao caso.&rdquo;</th>
	  </tr>
	<tr><th colspan="8">&nbsp;</th></tr>
	
	</tfoot>
	
    <!-- xxxxxxxxxx Conteudo xxxxxxxxxx -->
    <tbody>
    
	<?php
	if($listar[_local] != 'Meketrefe')
	{
		?>
		<tr>
            <td colspan="8"><strong>Local Examinado:</strong></td>
		</tr>
		<tr>
		<td>&nbsp;</td>
            <td colspan="7"><?php echo $listar[_local];?></td>
		</tr>
        <tr>
	        <td colspan="8">&nbsp;</td>
        </tr>
		<?php
	}
	if($listar[_comentario] != 'Meketrefe')
	{
		?>
		<tr>
            <td colspan="8"><strong>Coment&aacute;rio:</strong></td>
		</tr>
		<tr>
            <td colspan="8"><?php echo nl2br($listar[_comentario]);?></td>
		</tr>
        <tr>
	        <td colspan="8">&nbsp;</td>
        </tr>
		<?php
	}
	if($listar[_interpretacao] != 'Meketrefe')
	{
		?>
		<tr>
            <td colspan="8"><strong>Interpreta&ccedil;&atilde;o:</strong></td>
		</tr>
		<tr>
            <td colspan="8"><?php echo nl2br($listar[_interpretacao]);?></td>
		</tr>
        <tr>
	        <td colspan="8">&nbsp;</td>
        </tr>
		<?php
	}
	if($listar[_conclusao] != 'Meketrefe')
	{
		?>
		<tr>
            <td colspan="8"><strong>Conclus&atilde;o:</strong></td>
		</tr>
		<tr>
            <td colspan="8"><?php echo nl2br($listar[_conclusao]);?></td>
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

<?php

$imagem  = $SQL -> Consultar("SELECT * FROM tb_imagens WHERE imagem_endoscopia = '{$listar[_id]}'");
$imagens = mysql_num_rows($imagem);
if($imagens)
{

?>
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
	<th width="60">&nbsp;</th>
	<th width="105">&nbsp;</th>
	<th width="75">&nbsp;</th>
	<th width="35">&nbsp;</th>
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
	<th colspan="8">ENDOSCOPIA IMAGENS</th>
	</tr>
	
	<tr><th colspan="8">&nbsp;</th></tr>
	
	</thead>
	
	<tfoot>
	
	<tr>
	  <th colspan="8" align="right"><img src="http://reports.petimagem.com.br/public/image/assinaturas/assinatura_padrao.jpg" alt="Dr&ordf; Pet Imagem" width="150" height="120" /></th>
	</tr>
    <tr>
      <th colspan="8" align="center" class="textoM">
        &ldquo;O presente resultado tem seu valor restrito &agrave; amostra examinada neste laborat&oacute;rio .&rdquo;	</th>
    </tr>
    
	<tr><th colspan="8">&nbsp;</th></tr>
	
	</tfoot>
	
    <!-- xxxxxxxxxx Conteudo xxxxxxxxxx -->
    <tbody>
    
    <?php
	$x = 0;
	echo "<tr class=\"img_listar\">\n";
	while($imagens = mysql_fetch_array($imagem))
	{
		echo "\t<td colspan=\"4\" class=\"img_agrupar\">\n";
		echo "<img src=\"http://laudos.petimagem.vegaturbo.com/public/images_e/{$imagens[imagem_imagem]}\" />\n";
		echo "\t<span>".nl2br($imagens[imagem_texto])."</span>\n";
		echo "\t</td>\n";
		if($x ++ % 2 == 1)
		{
			echo "</tr>\n";
		}
	}
	// echo "</tr>\n";
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

<?php

}

?>
