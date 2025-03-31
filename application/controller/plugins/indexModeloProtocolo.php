<fieldset>

	<span id="protocolo_id" indice="<?php echo $Exame[protocolo_id]; ?>"></span>

	<label>

		<strong>Protocolo: <?php echo $Exame[_protocolo]; ?></strong>

	</label>

	<label>

		<strong>Solicita&ccedil;&atilde;o: <?php echo $implode; ?></strong>

	</label>

	<label>

		<strong>Paciente:</strong>
		<span class="ep_" numero="<?php echo $Numero; ?>" celula="_paciente"><span class="ep_<?php echo $Numero; ?>" <?php $Numero++; ?>><?php echo $Exame[_paciente]; ?></span></span>

	</label>

	<label>

		<strong>Idade:</strong>
		<span class="ep_" numero="<?php echo $Numero; ?>" celula="_idade"><span class="ep_<?php echo $Numero; ?>" <?php $Numero++; ?>><?php echo $Exame[_idade]; ?></span></span>

	</label>

	<label>

		<strong>Esp&eacute;cie:</strong>
		<span id="especie"><?php echo $Exame[_especie]; ?></span>

	</label>

	<label>

		<strong>Sexo:</strong>
		<span id="genero"><?php echo $Exame[_genero]; ?></span>

	</label>

	<label>

		<strong>Ra&ccedil;a:</strong>
		<span id="raca"><?php echo $Exame[_raca]; ?></span>

	</label>

	<label>

		<strong>Propriet&aacute;rio:</strong>
		<span class="ep_" numero="<?php echo $Numero; ?>" celula="_proprietario"><span class="ep_<?php echo $Numero; ?>"
				<?php $Numero++; ?>><?php echo $Exame[_proprietario]; ?></span></span>

	</label>

	<label>

		<strong>Cl&iacute;nica:</strong>
		<span id="clinica"><?php echo $Exame[_clinica_titulo]; ?></span>

	</label>

	<label>

		<strong>Dr(a).:</strong>
		<span class="ep_" numero="<?php echo $Numero; ?>" celula="_requisitante"><span class="ep_<?php echo $Numero; ?>"
				<?php $Numero++; ?>><?php echo $Exame[_requisitante]; ?></span></span>

	</label>

</fieldset>