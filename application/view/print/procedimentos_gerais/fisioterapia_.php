<div class="corpo">

		<div class="cabecalho"></div>
	
	<div class="conteudo">

	<!-- Laudo  -->

	<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->

	<?php include("application/controller/plugins/indexModeloProtocoloImpressao.php");?>

	<table width="840" border="0" cellpadding="0" cellspacing="0">

    <tr>
	<th width="840" colspan="3">&nbsp;</th>
	</tr>
	<tr>
	<th width="840" colspan="3">FISIOTERAPIA</th>
	</tr>
    <tr>
	<th width="840" colspan="3">&nbsp;</th>
	</tr>

	<?php
	if ($listar[_relatorio] != 'Meketrefe')
	{
	?>

		<tr>
		<td colspan="3"><strong>Relat&oacute;rio:</strong></td>
		</tr>
		<tr>
		<td colspan="3" align="justify"><?php echo nl2br($listar[_relatorio]); ?></td>
		</tr>
		<tr>
		<td colspan="3">&nbsp;</td>
		</tr>
	<?php
	}
	?>
	</table>

	<table width="840" border="0" cellpadding="0" cellspacing="0">
	<tr>
	  <th>&nbsp;</th>
	  <th colspan="5"><?php echo $listar[_autor];?></th>
	  </tr>
	<tr>
	  <th>&nbsp;</th>
	  <th colspan="5"><?php echo $listar[_crmv];?></th>
	  </tr>
	<tr>
	  <td colspan="2">&nbsp;</td>
	  </tr>
	</table>

	<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->

	</div>

	<div class="rodape">

	<strong><?php echo 'Curitiba, ' . Functions::dia_da_semana() . ' '.date('d').' de ' . Functions::retorna_mes(date('n')) . ' de '.date('Y');?></strong>

	</div>

</div>

<div class="ppagina"></div>