<div class="corpo">
	
		<div class="cabecalho"></div>
	
	<div class="conteudo">
	
	<!-- Laudo de Acupuntura -->
	
	<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
	
	<?php include("application/controller/plugins/indexModeloProtocoloImpressao.php");?>
	
	<table width="840" border="0" cellpadding="0" cellspacing="0">
	<tr>
	<td colspan="2">&nbsp;</td>
	</tr>
	<tr>
	<th colspan="2">ACUPUNTURA</th>
	</tr>
	<tr>
	<td colspan="2">&nbsp;</td>
	</tr>
	<?php
	if($listar[_relatorio] != 'Meketrefe')
	{
		?>
		<tr>
		<td colspan="2"><strong>Relat&oacute;rio:</strong></td>
		</tr>
		<tr>
		<td colspan="2" align="justify">
		<?php echo nl2br($listar[_relatorio]); ?>
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
    <td align="right">
	<img alt="Dr&ordf; Solange Aparecida Marconcin" title="Dr&ordf; Solange Aparecida Marconcin" src="http://reports.petimagem.com.br/public/image/assinaturas/solange.jpg" width="150" height="120" />
	</td>
    </tr>
	<tr>
	<td width="840">&nbsp;</td>
	</tr>
    </table>
	
	<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
	
	</div>
	
	<div class="rodape">
	
	<strong><?php echo 'Curitiba, ' . Functions::dia_da_semana() . ' '.date('d').' de ' . Functions::retorna_mes(date('n')) . ' de '.date('Y');?></strong>
	
	</div>
	
</div>

<div class="ppagina"></div>
