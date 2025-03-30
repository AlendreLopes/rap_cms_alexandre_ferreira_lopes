<div class="corpo">

    <div class="cabecalho"></div>
    
    <div class="conteudo">
	
	<!-- Laudo Bioquimica -->
	
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
	<th colspan="8">BIOQU&Iacute;MICA</th>
	</tr>
	
	<tr><th colspan="8">&nbsp;</th></tr>
	
	</thead>
	
	<tfoot>
	
	<tr>
        <th colspan="8">&nbsp;</th>
        </tr>
        <tr>
            <th colspan="10" align="right"><img src="http://reports.petimagem.com.br/public/image/assinaturas/danielle.jpg" alt="Dr&ordf; Danielle" title="Drª Danielle Tullio Murad" width="150" height="120" /></th>
        </th>
        </tr>
        <tr>
        <th colspan="8" align="center" class="textoM">
            &ldquo;O presente resultado tem seu valor restrito &agrave; amostra examinada neste laborat&oacute;rio .&rdquo;	</th>
        </tr>
        <tr>
            <th colspan="8">&nbsp;</th>
        </tr>
	<tr>
            <th colspan="8" align="justify" class="textoM">
            &ldquo;Qualquer teste e/ou exame laboratorial depende da  an&aacute;lise conjunta do seu resultado e dos dados cl&iacute;nicos. Eventualmente,  resultados discordantes podem ocorrer por interfer&ecirc;ncias fisiol&oacute;gicas,  farmacol&oacute;gicas, de acondicionamento e envio das amostras. Em caso de d&uacute;vida,  solicitamos, ao M&eacute;dico Veterin&aacute;rio, contatar com o M&eacute;dico Veterin&aacute;rio Patologista  respons&aacute;vel.&rdquo;	</th>
	</tr>
	
	<tr><th colspan="8">&nbsp;</th></tr>
	
	<tr><th colspan="8">&nbsp;</th></tr>
	
	</tfoot>
	
	<tbody>
	<?php
	if ($listar[_albumina] != 'Meketrefe')
	{
            ?>
            <tr>
            <td colspan="3" valign="top">
                <br />
                <strong>ALBUMINA:</strong>
                <br />
                <span class="textoM">
                <strong>Amostra: <em><?php echo $listar[_albumina_a]; ?></em></strong>
                <br />
                <strong>M&eacute;todo: <em>Verde de Bromocresol</em></strong>
                </span>
            </td>
            <td colspan="2" valign="top"><br />
                <strong><?php echo $listar[_albumina]; ?></strong><br />
                <span class="textoM">
                Canino: 2.3 - 3.3
                <br />
                Felino: 2.1 - 3.3
                </span>
            </td>
            <td colspan="3" valign="top">
                <br />
                <strong>&nbsp;g/dL</strong>
            </td>
            </tr>
            <?php
	}
	if ($listar[_tgp] != 'Meketrefe')
	{
            ?>
            <tr>
            <td colspan="3" valign="top">
                <br />
                <strong>ALT(Alanina aminotransferase)(TGP):</strong>
                <br />
                <span class="textoM">
                <strong>Amostra: <em><?php echo $listar[_tgp_a]; ?></em></strong>
                <br />
                <strong>M&eacute;todo: <em>Cin&eacute;tico U.V</em></strong></span>
                <br />
            </td>
            <td colspan="2" valign="top"><br />
                <strong><?php echo $listar[_tgp]; ?></strong>
                <br />
                <span class="textoM">
                Canino: 15 - 58
                <br />
                Felino: 10 - 100
                </span>
            </td>
            <td colspan="3" valign="top"><br />
                <strong>UI/L</strong>
            </td>
            </tr>
            <?php
	}
	if ($listar[_amilase] != 'Meketrefe')
	{
	?>
            <tr>
            <td colspan="3" valign="top">
                <br />
                <strong>AMILASE:</strong>
                <br />
                <span class="textoM">
                <strong>Amostra: <em><?php echo $listar[_amilase_a]; ?></em></strong>
                <br />
                <strong>M&eacute;todo: <em>Cin&eacute;tico UV </em></strong>
                </span>
            </td>
            <td colspan="2" valign="top"><br />
		<strong><?php echo $listar[_amilase]; ?></strong>
                <br />
                <span class="textoM">
                Canino: 185 - 700
                <br />
                Felino: 150 - 650
                </span>
            </td>
            <td colspan="3" valign="top"><br />
                <strong>UI/L</strong></td>
	    </tr>
            <?php
	}
        /*
	if ($listar[_amonia_r] != 'Meketrefe')
        {
            ?>
            <tr>
            <td colspan="3" valign="top">
                <br />
                <strong>AM&Ocirc;NIA:</strong>
                <br />
                <span class="textoM">
                <strong>Amostra: <em>Plasma</em></strong>
                <br />
                <strong>M&eacute;todo: <em><?php echo $listar[_amonia_m]; ?></em></strong>
                </span>
            </td>
            <td colspan="5" valign="top">
                <br />
		<strong><?php echo $listar[_amonia_r]; ?></strong>
                <!--
                <br />
                <span class="textoM">
                Canino: <?php // echo $listar[_amonia_c]; ?><br />Felino: <?php // echo $listar[_amonia_f]; ?>
                Canino: 14,67 � 54,00
                <br />
                Felino: 17,61 - 58
                <br />
                Eq&uuml;ino: 7,63 � 63,40
                </span>
                -->
            </td>
            <!--
            <td colspan="3" valign="top"><br />
		<strong>UI/L</strong>
            </td>
            -->
	    </tr>
            <?php
	}
        */
	if ($listar[_tgo] != 'Meketrefe')
	{
	?>
            <tr>
            <td colspan="3" valign="top">
                <br />
                <strong>AST(Aspartato aminotransferase)(TGO):</strong>
                <br />
                <span class="textoM">
                <strong>Amostra: <em><?php echo $listar[_tgo_a]; ?></em></strong>
                <br />
                <strong>M&eacute;todo: <em>Cin&eacute;tico U.V</em></strong>
                </span>
            </td>
            <td colspan="2" valign="top">
                <br />
                <strong><?php echo $listar[_tgo]; ?></strong>
                <br />
                <span class="textoM">
                Canino: 10 - 43<br />Felino: 12 - 56
                </span>
            </td>
            <td colspan="3" valign="top">
                <br />
                <strong>UI/L</strong>
            </td>
	    </tr>
            <?php
	}
	if ($listar[_bilirrubina_total] != 'Meketrefe')
	{
	?>
            <tr>
            <td colspan="3" valign="top">
                <br />
                <strong>BILIRRUBINA TOTAL:</strong>
                <br />
                <span class="textoM">
                <strong>Amostra: <em><?php echo $listar[_bilirrubina_total_a]; ?></em></strong>
                <br />
                <strong>M&eacute;todo: <em>Malloy-Evelyn modificado</em></strong>
                </span>
            </td>
            <td colspan="2" valign="top">
                <br />
                <strong><?php echo $listar[_bilirrubina_total]; ?></strong>
                <br />
                <span class="textoM">
                Canino: 0.1 - 0.6
                <br />
                Felino: 0.1 - 0.6
                </span>
            </td>
            <td colspan="3" valign="top">
                <br />
                <strong>mg/dL</strong>
            </td>
	    </tr>
            <?php
	}
	if ($listar[_bilirrubina_direta] != 'Meketrefe')
	{
            ?>
            <tr>
            <td colspan="3" valign="top">
                <br />
                <strong>BILIRRUBINA DIRETA:</strong>
                <br />
                <span class="textoM">
                <strong>Amostra: <em><?php echo $listar[_bilirrubina_direta_a]; ?></em></strong>
                <br />
                <strong>M&eacute;todo: <em>Malloy-Evelyn modificado</em></strong>
                </span>
                <br />
            </td>
            <td colspan="2" valign="top"><br />
                <strong><?php echo $listar[_bilirrubina_direta]; ?></strong>
                <br />
                <span class="textoM">
                Canino: 0.06 - 0.12
                <br />
                Felino: 0.06 - 0.12
                </span>
            </td>
            <td colspan="3" valign="top">
                <br />
                <strong>mg/dL</strong>
            </td>
	    </tr>
            <?php
	}
	if ($listar[_bilirrubina_indireta] != 'Meketrefe')
	{
            ?>
            <tr>
            <td colspan="3" valign="top">
                <br />
		<strong>BILIRRUBINA INDIRETA:</strong>
                <br />
                <span class="textoM">
                <strong>Amostra: <em><?php echo $listar[_bilirrubina_indireta_a]; ?></em></strong>
                <br />
                <strong>M&eacute;todo: <em>Malloy-Evelyn modificado</em></strong>
                </span>
            </td>
            <td colspan="2" valign="top"><br />
                <strong><?php echo $listar[_bilirrubina_indireta]; ?></strong>
                <br />
                <span class="textoM">
                Canino: 0.1 - 0.5
                <br />
                Felino: 0.1 - 0.5
                </span>
            </td>
            <td colspan="3" valign="top"><br />
                <strong>mg/dL</strong>
            </td>
            </tr>
            <?php
	}
	if ($listar[_calcio] != 'Meketrefe')
	{
            ?>
            <tr>
            <td colspan="3" valign="top">
                <br />
                <strong>C&Aacute;LCIO:</strong>
                <br />
                <span class="textoM">
                <strong>Amostra: <em><?php echo $listar[_calcio_a]; ?></em></strong>
                <br />
                <strong>M&eacute;todo: <em>Colorim&eacute;trico direto</em></strong>
                </span>
            </td>
            <td colspan="2" valign="top"><br />
                <strong><?php echo $listar[_calcio]; ?></strong>
                <br />
                <span class="textoM">
                Canino: 9 - 11.3
                <br />
                Felino: 6.2 - 10.2
                </span>
            </td>
            <td colspan="3" valign="top"><br />
                <strong>mg/dL</strong>
            </td>
            </tr>
            <?php
	}
	if ($listar[_cloro] != 'Meketrefe')
	{
            ?>
            <tr>
            <td colspan="3" valign="top">
                <br />
                <strong>CLORETO:</strong>
                <br />
                <span class="textoM">
                <strong>Amostra: <em>Soro</em></strong>
                <br />
                <strong>M&eacute;todo: <em>Eletro Seletivo</em></strong>
                </span>
            </td>
            <td colspan="2" valign="top"><br />
                <strong><?php echo $listar[_cloro]; ?></strong>
                <br />
                <span class="textoM">
                Canino: 96 a 122
                <br />
                Felino: 108 a 128
                </span>
            </td>
            <td colspan="3" valign="top"><br />
                <strong>mEq/L</strong>
            </td>
            </tr>
            <?php
	}
	if ($listar[_colesterol] != 'Meketrefe')
	{
            ?>
            <tr>
            <td colspan="3" valign="top">
                <br />
                <strong>COLESTEROL:</strong>
                <br />
                <span class="textoM">
                <strong>Amostra: <em><?php echo $listar[_colesterol_a]; ?></em></strong>
                <br />
                <strong>M&eacute;todo: <em>Colorim&eacute;trico-enzim&aacute;tico</em></strong>
                </span>
            </td>
            <td colspan="2" valign="top"><br />
                <strong><?php echo $listar[_colesterol]; ?></strong>
                <br />
                <span class="textoM">
                Canino: 108 - 270
                <br />
                Felino: 38 - 186
                </span>
            </td>
            <td colspan="3" valign="top"><br />
                <strong>mg/dL</strong>
            </td>
            </tr>
            <?php
	}
	if ($listar[_colesterol_hdl] != 'Meketrefe')
	{
            ?>
            <tr>
            <td colspan="3" valign="top">
                <br />
                <strong>COLESTEROL HDL:</strong>
                <br />
                <span class="textoM">
                <!--<strong>Amostra: <em><?php // echo $listar[_colesterol_a]; ?></em></strong>-->
                <strong>Material: <em>Soro</em></strong>
                <br />
                <strong>M&eacute;todo: <em>Colorim&eacute;trico-enzim&aacute;tico</em></strong>
                </span>
            </td>
            <td colspan="2" valign="top">
                <br />
                <strong><?php echo $listar[_colesterol_hdl]; ?></strong>
                <br />
                <span class="textoM">
                Canino: 40 - 78
                <br />
                Felino: 40 - 86
                </span>
            </td>
            <td colspan="3" valign="top">
                <br />
                <strong>mg/dL</strong>
            </td>
            </tr>
            <?php
	}
	if ($listar[_colesterol_ldl] != 'Meketrefe')
	{
            ?>
            <tr>
            <td colspan="3" valign="top">
                <br />
                <strong>COLESTEROL LDL:</strong>
                <br />
                <span class="textoM">
                <!--<strong>Amostra: <em><?php // echo $listar[_colesterol_a]; ?></em></strong>-->
                <strong>Material: <em>Soro</em></strong>
                <br />
                <strong>M&eacute;todo: <em>Colorim&eacute;trico-enzim&aacute;tico</em></strong>
                </span>
            </td>
            <td colspan="2" valign="top"><br />
                <strong><?php echo $listar[_colesterol_ldl]; ?></strong>
                <br />
                <span class="textoM">
                Canino: 31 - 71
                <br />
                Felino: 20 - 40
                </span>
            </td>
            <td colspan="3" valign="top"><br />
                <strong>mg/dL</strong>
            </td>
            </tr>
            <?php
	}
	if ($listar[_colesterol_vldl] != 'Meketrefe')
	{
            ?>
            <tr>
            <td colspan="3" valign="top">
                <br />
                <strong>COLESTEROL VLDL:</strong>
                <br />
                <span class="textoM">
                <!--<strong>Amostra: <em><?php // echo $listar[_colesterol_a]; ?></em></strong>-->
                <strong>Material: <em>Cin&eacute;tico</em></strong>
                <br />
                <strong>M&eacute;todo: <em>Colorim&eacute;trico-enzim&aacute;tico</em></strong>
                </span>
            </td>
            <td colspan="2" valign="top">
                <br />
                <strong><?php echo $listar[_colesterol_vldl]; ?></strong>
                <br />
                <span class="textoM">
                Canino: at&eacute; 16
                <br />
                Felino: 95 - 205
                </span>
            </td>
            <td colspan="3" valign="top"><br />
                <strong>mg/dL</strong>
            </td>
            </tr>
            <?php
	}
	if ($listar[_creatina_q] != 'Meketrefe')
	{
            ?>
            <tr>
            <td colspan="3" valign="top">
                <br />
                <strong>CREATINA QUINASE (CPK):</strong>
                <br />
                <span class="textoM">
                <strong>Amostra: <em><?php echo $listar[_creatina_q_a]; ?></em></strong>
                <br />
                <strong>M&eacute;todo: <em>Cin&eacute;tico</em></strong>
                </span>
            </td>
            <td colspan="2" valign="top"><br />
                <strong><?php echo $listar[_creatina_q]; ?></strong>
                <br />
                <span class="textoM">
                Canino: 20 - 200
                <br />
                Felino: 50 - 450
                </span>
            </td>
            <td colspan="3" valign="top">
                <br />
                <strong>UI/L</strong>
            </td>
            </tr>
            <?php
	}
	if ($listar[_creatinina] != 'Meketrefe')
	{
            ?>
            <tr>
            <td colspan="3" valign="top">
                <br />
                <strong>CREATININA:</strong>
                <br />
                <span class="textoM">
                <strong>Amostra: <em><?php echo $listar[_creatinina_a]; ?></em></strong>
                <br />
                <strong>M&eacute;todo: <em>Cin&eacute;tico-colorim&eacute;trico</em></strong>
                </span>
            </td>
            <td colspan="2" valign="top"><br />
                <strong><?php echo $listar[_creatinina]; ?></strong>
                <br />
                <span class="textoM">
                Canino &lt; 3 meses: at&eacute; 0,75
                <br />
                Canino &lt; 1 ano: at&eacute; 1,05
                <br />
                Canino &gt; 1 ano: 0,5 - 1,6
                <br />
                Felino &lt; 1 ano: at&eacute; 1,20
                <br />
                Felino &gt; 1 ano: 0,8 - 1,8
                </span>
            </td>
            <td colspan="3" valign="top"><br />
                <strong>mg/dL</strong>
            </td>
            </tr>
            <?php
	}
	if ($listar[_ferro] != 'Meketrefe')
	{
            ?>
            <tr>
            <td colspan="3" valign="top">
                <br />
                <strong>FERRO:</strong>
                <br />
                <span class="textoM">
                <strong>Amostra: <em>Soro</em></strong>
                <br />
                <strong>M&eacute;todo: <em>Colorim&eacute;trico</em></strong>
                </span>
            </td>
            <td colspan="2" valign="top"><br />
                <strong><?php echo $listar[_ferro]; ?></strong>
                <br />
                <span class="textoM">
                Canino: 90 - 122
                <br />
                Felino: 34 - 122
                </span>
            </td>
            <td colspan="3" valign="top"><br />
                <strong>ug/dL</strong>
            </td>
            </tr>
            <?php
	}
	if ($listar[_fosfatase_a] != 'Meketrefe')
	{
            ?>
            <tr>
            <td colspan="3" valign="top">
                <br />
                <strong>FOSFATASE ALCALINA:</strong>
                <br />
                <span class="textoM">
                <strong>Amostra: <em><?php echo $listar[_fosfatase_a_a]; ?></em></strong>
                <br />
                <strong>M&eacute;todo: <em>Cin&eacute;tico U.V</em></strong>
                </span>
            </td>
            <td colspan="2" valign="top"><br />
                <strong><?php echo $listar[_fosfatase_a]; ?></strong>
                <br />
                <span class="textoM">
                Canino < 12 meses: 10 - 80
                <br />
                Canino > 12 meses: 20 - 156
                <br />
                Felino < 12 meses: 10 - 93
                <br />
                Felino > 12 meses: 25 - 180
                </span>
            </td>
            <td colspan="3" valign="top">
                <br />
                <strong>UI/L</strong>
            </td>
            </tr>
            <?php
	}
	if ($listar[_fosforo] != 'Meketrefe')
	{
            ?>
            <tr>
            <td colspan="3" valign="top">
                <br />
                <strong>F&Oacute;SFORO:</strong>
                <br />
                <span class="textoM">
                <strong>Amostra: <em>Soro</em></strong>
                <br />
                <strong>M&eacute;todo: <em>Colorim&eacute;trico</em></strong>
                </span>
            </td>
            <td colspan="2" valign="top"><br />
                <strong><?php echo $listar[_fosforo]; ?></strong>
                <br />
                <span class="textoM">
                Canino: 2.6 a 6.5
                <br />
                Felino: 3 a 8.2
                </span>
            </td>
            <td colspan="3" valign="top"><br />
                <strong>mg/dL</strong>
            </td>
            </tr>
            <?php
	}
	if ($listar[_frutosamina] != 'Meketrefe')
	{
            ?>
            <tr>
            <td colspan="3" valign="top">
                <br />
                <strong>FRUTOSAMINA:</strong>
                <br />
                <span class="textoM">
                <strong>Amostra: <em>Soro</em></strong>
                <br />
                <strong>M&eacute;todo:<em> Cin&eacute;tico-colorim&eacute;trico</em></strong>
                </span>
            </td>
            <td colspan="2" valign="top">
                <br />
                <strong><?php echo $listar[_frutosamina]; ?></strong>
                <br />
                <span class="textoM">
                Canino: 170 a 338
                <br />
                Felino: 219 a 347
              </span>
            </td>
            <td colspan="3" valign="top">
                <br />
                <strong>mmol/L</strong>
            </td>
	    </tr>
            <?php
	}
	if ($listar[_gama_g] != 'Meketrefe')
	{
            ?>
            <tr>
            <td colspan="3" valign="top">
                <br />
                <strong>GAMA GLUTAMILTRANSFERASE (GGT):</strong>
                <br />
                <span class="textoM">
                <strong>Amostra: <em><?php echo $listar[_gama_g_a]; ?></em></strong>
                <br />
                <strong>M&eacute;todo: <em>Cin&eacute;tico U.V</em></strong>
                </span>
            </td>
            <td colspan="2" valign="top">
                <br />
                <strong><?php echo $listar[_gama_g]; ?></strong>
                <br />
                <span class="textoM">
                <br />
                Canino: 1 - 16.4
                <br />
                Felino: 1 - 15.1
                </span>
            </td>
            <td colspan="3" valign="top">
                <br />
                <strong>UI/L</strong>
            </td>
            </tr>
            <?php
	}
	if ($listar[_glicose] != 'Meketrefe')
	{
            ?>
            <tr>
            <td colspan="3" valign="top">
                <br />
                <strong>GLICOSE:</strong>
                <br />
                <span class="textoM">
                <strong>Amostra: <em><?php echo $listar[_glicose_a]; ?></em></strong>
                <br />
                <strong>M&eacute;todo:<br /><em>Enzim&aacute;tico Colorim&eacute;trico sem desproteiniza&ccedil;&atilde;o</em></strong>
                </span>
            </td>
            <td colspan="2" valign="top"><br />
                <strong><?php echo $listar[_glicose]; ?></strong>
                <br />
                <span class="textoM">
                Canino: 65 - 120
                <br />
                Felino: 58 - 120
                </span>
            </td>
            <td colspan="3" valign="top">
                <br />
                <strong>mg/dL</strong>
            </td>
            </tr>
            <?php
	}
	if ($listar[_globulinas] != 'Meketrefe')
	{
            ?>
            <tr>
            <td colspan="3" valign="top">
                <br />
                <strong>GLOBULINAS:</strong>
                <br />
                <span class="textoM">
                <strong>Amostra: <em><?php echo $listar[_globulinas_a]; ?></em></strong>
                <br />
                <!--<strong>M&eacute;todo: <em><?php // echo $listar[_globulinas_m]; ?></em></strong>-->
                </span>
            </td>
            <td colspan="2" valign="top">
                <br />
                <strong><?php echo $listar[_globulinas]; ?></strong>
                <br />
		<span class="textoM">
                Canino: 2.7 - 4.4
                <br />
                Felino: 2.6 - 5.1
                </span>
            </td>
            <td colspan="3" valign="top">
                <br />
                <strong>g/dL</strong>
            </td>
            </tr>
            <?php
	}
	/*
	if ($listar[_hemoglobina] != 'Meketrefe')
	{
            ?>
            <!--
            <tr>
            <td colspan="3" valign="top">
                <br />
                <strong>HEMOGLOBINA:</strong>
                <br />
                <span class="textoM">
                <strong>Amostra: <em><?php echo $listar[_hemoglobina_a]; ?></em></strong>
                <br />
                <strong>M&eacute;todo: <em>Autom&aacute;tico Celm-530</em></strong>
                </span>
            </td>
            <td colspan="2" valign="top"><br />
                <strong><?php echo $listar[_hemoglobina]; ?></strong>
                <br />
                <span class="textoM">
                Canino: 12,2 - 18
                <br />
                Felino: 8 - 15
                <br />
                Eq&uuml;ino: 11 - 19
                </span>
            </td>
            <td colspan="3" valign="top">
                <br />
                <strong>g/dL</strong>
            </td>
            </tr>
            -->
            <?php
	}
	*/
	if ($listar[_ldh] != 'Meketrefe')
	{
            ?>
            <tr>
            <td colspan="3" valign="top">
                <br />
                <strong>LACTATO DESIDROGENASE (LDH):</strong>
                <br />
                <span class="textoM">
                <strong>Amostra: <em><?php echo $listar[_ldh_a]; ?></em></strong>
                <br />
                <strong>M&eacute;todo: <em>Cin&eacute;tico U.V</em></strong>
                </span>
            </td>
            <td colspan="2" valign="top">
                <br />
                <strong><?php echo $listar[_ldh]; ?></strong>
                <br />
                <span class="textoM">
                <!--<?php //echo $listar[_ldh_v]; ?>-->
                Canino: 50 &ndash; 495
                <br />
                Felino: 75 - 490
                </span>
            </td>
            <td colspan="3" valign="top"><br />
                <strong>UI/L</strong>
            </td>
            </tr>
            <?php
	}
	if ($listar[_lipase] != 'Meketrefe')
	{
            ?>
            <tr>
            <td colspan="3" valign="top">
                <br />
                <strong>LIPASE:</strong>
                <br />
                <span class="textoM">
                <strong>Amostra: <em><?php echo $listar[_lipase_a]; ?></em></strong>
                <br />
                <strong>M&eacute;todo: <em>Colorim&eacute;trico</em></strong>
                </span>
            </td>
            <td colspan="2" valign="top"><br />
                <strong><?php echo $listar[_lipase]; ?></strong>
                <br />
                <span class="textoM">
                Canino: 13 - 200
                <br />
                Felino: 0 - 83
                </span>
            </td>
            <td colspan="3" valign="top"><br />
                <strong>UI/L</strong>
            </td>
            </tr>
            <?php
	}
	if ($listar[_magnesio] != 'Meketrefe')
	{
            ?>
            <tr>
            <td colspan="3" valign="top">
                <br />
                <strong>MAGN&Eacute;SIO:</strong>
                <br />
                <span class="textoM">
                <strong>Amostra: <em>Soro</em></strong>
                <br />
                <strong>M&eacute;todo: <em>Colorim&eacute;trico</em></strong>
                </span>
            </td>
            <td colspan="2" valign="top">
                <br />
                <strong><?php echo $listar[_magnesio]; ?></strong>
                <br />
                <span class="textoM">
                Canino: 1.2 a 2.4
                <br />
                Felino: 1.5 a 3.5
                </span>
            </td>
            <td colspan="3" valign="top">
                <br />
                <strong>mg/dL</strong>
            </td>
            </tr>
            <?php
	}
	if ($listar[_potassio] != 'Meketrefe')
	{
            ?>
            <tr>
            <td colspan="3" valign="top">
                <br />
                <strong>POT&Aacute;SSIO:</strong>
                <br />
                <span class="textoM">
                <strong>Amostra: <em><?php echo $listar[_potassio_a]; ?></em></strong>
                <br />
                <strong>
                M&eacute;todo: 
                <em>
                Cin&eacute;tico
                <!--<?php // echo $listar[_potassio_m]; ?>-->
                </em>
                </strong>
                </span>
            </td>
            <td colspan="2" valign="top">
                <br />
                <strong><?php echo $listar[_potassio]; ?></strong>
                <br />
                <span class="textoM">
                <!--<?php // echo nl2br($listar[_potassio_v]); ?>-->
                Canino: 4.2 &ndash; 5.6
                <br />
                Felino: 4 &ndash; 5.3
                </span>
            </td>
            <td colspan="3" valign="top">
                <br />
                <strong>mEq/L</strong>
            </td>
            </tr>
            <?php
	}
	if ($listar[_proteina_total] != 'Meketrefe')
	{
            ?>
            <tr>
            <td colspan="3" valign="top">
                <br />
                <strong>PROTE&Iacute;NA TOTAL:</strong>
                <br />
                <span class="textoM">
                <strong>Amostra: <em><?php echo $listar[_proteina_total_a]; ?></em></strong>
                <br />
                <strong>M&eacute;todo: <em>Biureto</em></strong>
                </span>
            </td>
            <td colspan="2" valign="top">
                <br />
                <strong><?php echo $listar[_proteina_total]; ?></strong>
                <br />
                <span class="textoM">
                Canino: 5.47 - 7.8
                <br />
                Felino: 5.4 - 8
                </span>
            </td>
            <td colspan="3" valign="top"><br />
                <strong>g/dL</strong>
            </td>
            </tr>
            <?php
	}
	if ($listar[_sodio] != 'Meketrefe')
	{
            ?>
            <tr>
            <td colspan="3" valign="top">
                <br />
                <strong>S&Oacute;DIO:</strong>
                <br />
                <span class="textoM">
                <strong>Amostra:</strong> <em><?php echo $listar[_sodio_a]; ?></em>
                <br />
                <strong>M&eacute;todo: <em>Cin&eacute;tico<!--<?php // echo $listar[_sodio_m]; ?>--></em></strong>
                </span>
            </td>
            <td colspan="2" valign="top"><br />
                <strong><?php echo $listar[_sodio]; ?></strong>
                <br />
                <span class="textoM">
                Canino: 141 - 152
                <br />
                Felino: 147 - 156
                </span>
            </td>
            <td colspan="3" valign="top"><br />
                <strong>mEq/L</strong>
            </td>
            </tr>
            <?php
	}
	if ($listar[_triglicerideos] != 'Meketrefe')
	{
            ?>
            <tr>
            <td colspan="3" valign="top">
                <br />
                <strong>TRIGLICER&Iacute;DEOS:</strong>
                <br />
                <span class="textoM">
                <strong>Amostra: <em><?php echo $listar[_triglicerideos_a]; ?></em></strong>
                <br />
                <strong>M&eacute;todo: <em>Enzim&aacute;tico-colorim&eacute;trico</em></strong>
                </span>
            </td>
            <td colspan="2" valign="top">
                <br />
                <strong><?php echo $listar[_triglicerideos]; ?></strong>
                <br />
                <span class="textoM">
                Canino: 27.4 - 144
                <br />
                Felino: 10 - 114
               </span>
            </td>
            <td colspan="3" valign="top">
                <br />
                <strong>mg/dL</strong>
            </td>
            </tr>
            <?php
	}
	if ($listar[_ureia] != 'Meketrefe')
	{
            ?>
            <tr>
            <td colspan="3" valign="top">
                <br />
                <strong>UR&Eacute;IA:</strong>
                <br />
                <span class="textoM">
                <strong>Amostra: <em><?php echo $listar[_ureia_a]; ?></em></strong>
                <br />
                <strong>M&eacute;todo: <em>Enzim&aacute;tico</em></strong>
                </span>
            </td>
            <td colspan="2" valign="top"><br />
                <strong><?php echo $listar[_ureia]; ?></strong>
                <span class="textoM">
                <br />
                Canino: 10 - 57
                <br />
                Felino: 10 - 56
                </span>
            </td>
            <td colspan="3" valign="top"><br />
                <strong>mg/dL</strong>
            </td>
            </tr>
            <?php
	}
	/*
	if ($listar[_outros] != 'Meketrefe')
	{
            ?>
            <!--
            <tr>
            <td colspan="9" align="justify">
                <br />
                <strong>Outros</strong>
                <br />
		<?php echo nl2br($listar[_outros]); ?>
            </td>
            </tr>
            -->
	<?php
	}
	*/
	if ($listar[_observacao] != 'Meketrefe')
	{
            ?>
            <tr>
            <td colspan="8" align="justify">
                <br />
                <strong>Observa&ccedil;&atilde;o</strong>
                <br />
                <?php echo nl2br($listar[_observacao]); ?>
            </td>
            </tr>
            <?php
	}
	?>
	</tbody>
	
	</table>
	
	<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
    
</div>
	
	<div class="rodape">
	
	<strong><?php echo 'Curitiba, ' . Functions::dia_da_semana() . ' ' . date('d') . ' de ' . Functions::retorna_mes(date('n')) . ' de ' . date('Y');?></strong>
	
	</div>
	
</div>