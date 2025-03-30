<div class="corpo">
	
		<div class="cabecalho"></div>
	
	<div class="conteudo">
	
	<!-- Laudo Endocrinologia -->
	
	<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
	
	<?php include("application/controller/plugins/indexModeloProtocoloImpressao.php");?>
	
	<table width="840" border="0" cellpadding="0" cellspacing="0">
	<tr>
	<td width="840" colspan="2">&nbsp;</td>
	</tr>
	<tr>
	<th colspan="2">ENDOCRINOLOGIA</th>
	</tr>
	<tr>
	<td colspan="2">&nbsp;</td>
	</tr>
	<?php
	if($listar[_conclusao] != 'Meketrefe')
	{
		?>
		<tr>
		<td colspan="2"><strong>Relat&oacute;rio:</strong></td>
		</tr>
		<tr>
		<td colspan="2" align="justify">
		<?php echo nl2br($listar[_conclusao]); ?>
		</td>
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
    <td align="right"><img alt="Drª Patricia Rick Barbosa" title="Drª Patricia Rick Barbosa" src="http://reports.petimagem.com.br/public/image/assinaturas/patricia.jpg" width="150" height="120" /></td>
    </tr>
	<tr>
	<td width="840">&nbsp;</td>
	</tr>
	<tr>
	<td align="justify" class="textoM">&ldquo;O resultado do presente exame n&atilde;o configura apresen&ccedil;a ou aus&ecirc;ncia de doen&ccedil;a devendo ser correlacionado com demais dados cl&iacute;nicos e exames complementares pertinentes ao caso.&rdquo;</td>
	</tr>
	<tr>
	<td>&nbsp;</td>
	</tr>
    </table>
	
	<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
    
	</div>
	
	<div class="rodape">
	
	<strong><?php echo 'Curitiba, ' . Functions::dia_da_semana() . ' '.date('d').' de ' . Functions::retorna_mes(date('n')) . ' de '.date('Y');?></strong>
	
	</div>
	
</div>

<div class="ppagina"></div>
