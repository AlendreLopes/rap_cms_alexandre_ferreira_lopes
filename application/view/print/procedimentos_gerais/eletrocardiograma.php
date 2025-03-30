<div class="corpo">
	
	<div class="cabecalho"></div>
	
	<div class="conteudo">
	
	<!-- Laudo -->
	
	<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
	
	<table width="840" border="0" cellpadding="0" cellspacing="0">
	
	<thead>
	
	<tr>
	<th width="100">&nbsp;</th>
	<th width="150">&nbsp;</th>
	<th width="50">&nbsp;</th>
	<th width="100">&nbsp;</th>
	<th width="75">&nbsp;</th>
	<th width="55">&nbsp;</th>
	<th width="108">&nbsp;</th>
	<th width="202">&nbsp;</th>
	</tr>
	
	<tr>
	<th colspan="8">&nbsp;</th>
	</tr>
	
	<tr>
            <th align="left"><strong>Protocolo:</strong></th>
            <th colspan="3" align="left"><span class="no_bold"><?php echo $Lista[_protocolo];?></span></th><th colspan="2" align="left"><strong>Solicita&ccedil;&atilde;o:</strong></th>
            <th colspan="2" align="left" class="no_bold"><?php echo $Implode;?></th>
	</tr>
	
	<tr>
            <th align="left"><strong>Paciente:</strong></th>
            <th colspan="3" align="left"><span class="no_bold"><?php echo $Lista[_paciente];?></span></th>
            <th colspan="2" align="left"><strong>Idade:</strong></th>
            <th colspan="2" align="left" class="no_bold"><?php echo $Lista[_idade];?></th>
	</tr>
	
	<tr>
            <th align="left"><strong>Esp&eacute;cie:</strong></th>
            <th colspan="3" align="left"><span class="no_bold"><?php echo $Lista[_especie];?></span></th>
            <th colspan="2" align="left"><strong>Sexo:</strong></th>
            <th colspan="2" align="left" class="no_bold"><?php echo $Lista[_genero];?></th>
	</tr>
	
	<tr>
            <th align="left"><strong>Ra&ccedil;a:</strong></th>
            <th colspan="3" align="left"><span class="no_bold"><?php echo $Lista[_raca];?></span></th>
            <th colspan="2" align="left"><strong>Propriet&aacute;rio:</strong></th>
            <th colspan="2" align="left" class="no_bold"><?php echo $Lista[_proprietario];?></th>
	</tr>
	
	<tr>
            <th align="left"><strong>Cl&iacute;nica:</strong></th>
            <th colspan="3" align="left"><span class="no_bold"><?php echo $Lista[_clinica_titulo];?></span></th>
            <th colspan="2" align="left"><strong>Dr(a).:</strong></th>
            <th colspan="2" align="left" class="no_bold"><?php echo $Lista[_requisitante];?></th>
	</tr>
	
	<tr><th colspan="8">&nbsp;</th></tr>
	
	<tr>
	<th colspan="8">ELETROCARDIOGRAMA</th>
	</tr>
	
	<tr><th colspan="8">&nbsp;</th></tr>
	
	</thead>
	
	<tfoot>
	
	<tr>
            <th colspan="8">&nbsp;</th>
        </tr>
        <tr>
            <th colspan="8" align="right"><img alt="Dr&ordf; Danielle" title="Drª Danielle Tullio Murad" src="http://reports.petimagem.com.br/public/image/assinaturas/danielle.jpg" /></th>
        </tr>
        <tr>
            <th colspan="8" align="center" class="textoM">
            &ldquo;O presente resultado tem seu valor restrito &agrave; amostra examinada neste laborat&oacute;rio .&rdquo;
            </th>
        </tr>
	<tr><th colspan="8">&nbsp;</th></tr>
	
	</tfoot>
	
        <!-- xxxxxxxxxx Conteudo xxxxxxxxxx -->
        <tbody>

            <?php
            if($listar[_batimento] != 'Meketrefe')
            {
            ?>
                <tr>
                <td>&nbsp;</td>
                <td><strong>Freq&uuml;&ecirc;ncia Card&iacute;aca:</strong></td>
                <td colspan="2"><?php echo $listar[_batimento];?></td>
                <td colspan="5"><strong>bat/min </strong></td>
                </tr>
            <?php
            }
            if($listar[_ritmo] != 'Meketrefe')
            {
            ?>
                <tr>
                <td>&nbsp;</td>
                <td><strong>Ritmo:</strong></td>
                <td colspan="6"><?php echo $listar[_ritmo];?></td>
                </tr>
            <?php
            }
            if($listar[_eixo] != 'Meketrefe')
            {
            ?>
                <tr>
                <td>&nbsp;</td>
                <td><strong>Eixo:</strong></td>
                <td colspan="2"><?php echo $listar[_eixo];?></td>
                <td colspan="5"><strong>&ordm;</strong></td>
                </tr>
            <?php
            }
            ?>
            <tr>
                <td colspan="8">&nbsp;</td>
            </tr>
            <tr>
                <td colspan="8" class="textoM">Velocidade 50mm/s 1cm = 1mV</td>
            </tr>
            <tr>
                <td colspan="8"><strong>Leitura em DII:</strong></td>
            </tr>
            <?php
            if($listar[_ondap] != 'Meketrefe')
            {
            ?>
                <tr>
                <td>&nbsp;</td>
                <td><strong>Onda P:</strong></td>
                <td><?php echo $listar[_ondap];?></td>
                <td><strong>mV</strong></td>
                <td><?php echo $listar[_ondap_s];?></td>
                <td colspan="5"><strong>s</strong></td>
                </tr>
            <?php
            }
            if($listar[_pr] != 'Meketrefe')
            {
            ?>
                <tr>
                <td>&nbsp;</td>
                <td><strong>Onda PR:</strong></td>
                <td><?php echo $listar[_pr];?></td>
                <td colspan="5"><strong>s</strong></td>
                </tr>
            <?php
            }
            if($listar[_qrs] != 'Meketrefe')
            {
            ?>
                <tr>
                <td>&nbsp;</td>
                <td><strong>Onda QRS:</strong></td>
                <td><?php echo $listar[_qrs];?></td>
                <td colspan="5"><strong>s</strong></td>
                </tr>
            <?php
            }
            if($listar[_r] != 'Meketrefe')
            {
            ?>
                <tr>
                <td>&nbsp;</td>
                <td><strong>Onda R:</strong></td>
                <td><?php echo $listar[_r];?></td>
                <td colspan="5"><strong>mV</strong></td>
                </tr>
            <?php
            }
            if($listar[_st] != 'Meketrefe')
            {
            ?>
                <tr>
                <td>&nbsp;</td>
                <td><strong>Onda ST:</strong></td>
                <td><?php echo $listar[_st];?></td>
                <td colspan="5"><strong>mV</strong></td>
                </tr>
            <?php
            }
            if($listar[_t] != 'Meketrefe')
            {
            ?>
                <tr>
                <td>&nbsp;</td>
                <td><strong>Onda T:</strong></td>
                <td><?php echo $listar[_t];?></td>
                <td colspan="5"><strong>mV</strong></td>
                </tr>
            <?php
            }
            if($listar[_qt] != 'Meketrefe')
            {
            ?>
                <tr>
                <td>&nbsp;</td>
                <td><strong>Onda QT:</strong></td>
                <td><?php echo $listar[_qt];?></td>
                <td colspan="5"><strong>s</strong></td>
                </tr>
            <?php
            }
            ?>
            <tr>
                <td colspan="8">&nbsp;</td>
            </tr>
            <?php
            if($listar[_outros] != 'Meketrefe')
            {
            ?>
                <tr>
                    <td colspan="8"><strong>Outros:</strong></td>
                </tr>
                <tr>
                    <td colspan="8"><?php echo nl2br($listar[_outros]);?></td>
                </tr>
                <tr class="textoM">
                    <td colspan="2">&nbsp;</td>
                    <td colspan="6">Valores de refer&ecirc;ncia: </td>
                </tr>
                <tr class="textoM">
                    <td colspan="2">&nbsp;</td>
                    <td colspan="6">CV5RL (rV2) – onda R: m&aacute;ximo de 2,5 mV - onda T: positiva </td>
                </tr>
                <tr class="textoM">
                    <td colspan="2">&nbsp;</td>
                    <td colspan="6">CV6LL (V2) – onda R: m&aacute;ximo de 2,5 mV - onda S: m&aacute;ximo de 0,8 mV </td>
                </tr>
                <tr class="textoM">
                    <td colspan="2">&nbsp;</td>
                    <td colspan="6">CV6LU (V4) – onda R: m&aacute;ximo de 2,5 mV - onda S: m&aacute;ximo de 0,7 mV </td>
                </tr>
                <tr class="textoM">
                    <td colspan="2">&nbsp;</td>
                    <td colspan="6">V10 – complexo QRS: negativo - onda T: negativa</td>
                </tr>
                <tr>
                    <td colspan="8" class="textoM">&nbsp;</td>
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
