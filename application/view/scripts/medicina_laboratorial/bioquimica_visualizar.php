<?php

$Exames  = $SQL -> Consultar("SELECT * FROM protocolos, laudos_ml_bioquimica WHERE protocolo_id = '$indice' AND _laudo = '$indice'");

$Exame   = mysql_fetch_array($Exames);

$implode = Functions::retorna_data('-','/',$Exame[_data]);

$Numero  = 1;

$paginas = str_replace("_visualizar","",$_GET['pagina']);
// URL Prim�ria sem Listagem
$url_p    = LMPaginas::Pagina($paginas);
// URL Secund�ria com Listagem
$url_s    = LMPaginas::Listar($paginas,$indices);
// URL Nova
$url_n    = !empty($indices) ? $url_s : $url_p;

$Otimizar = $SQL -> Atualizar("OPTIMIZE TABLE protocolos, laudos_ml_bioquimica");

?>
<!DOCTYPE html>

<html>

<head>

	<title>Visualizar</title>
	
	<script type="text/javascript" src="/library/plugins/thickbox/jquery_thickbox.js"></script>
	
	<script type="text/javascript" src="/library/plugins/editable/jquery_jeditable.js"></script>
	
	<script type="text/javascript">
		$(document).ready(function(){
			var t_t_l   = "protocolos";
			var c_i_l   = "protocolo_id";
			var c_i_v_l = $("#protocolo_id").attr("indice");
			
			$(".ep_").live('click',function(){
				var numero = $(this).attr("numero");
				var celula = $(this).attr("celula");
				$(".ep_" + numero).editable("/application/controller/plugins/indexEditar.php",
					{
						indicator  :'Salvando',
						width      :200,
						submitdata :{t_t:t_t_l,c_i:c_i_l,c_i_v:c_i_v_l,c_t:celula}
					}
				);
			});
			
			$("#especie").editable("/application/controller/plugins/indexEditar.php",
				{
					indicator  :'Salvando',
					loadurl    :'/application/controller/plugins/indexListarEspecies.php',
					type       :'select',
					submit     :'Editar',
					cancel     :'Cancelar',
					width      :100,
					submitdata :{t_t:t_t_l,c_i:c_i_l,c_i_v:c_i_v_l,c_t:"_especie"}
				}
			);
			
			$("#raca").editable("/application/controller/plugins/indexEditar.php",
				{
					indicator  :'Salvando',
					loadurl    :'/application/controller/plugins/indexListarRaca.php?indice=' + c_i_v_l,
					type       :'select',
					submit     :'Editar',
					cancel     :'Cancelar',
					width      :100,
					submitdata :{t_t:t_t_l,c_i:c_i_l,c_i_v:c_i_v_l,c_t:"_raca"}
				}
			);
			
			$("#genero").editable("/application/controller/plugins/indexEditar.php",
				{
					indicator  :'Salvando',
					data       :"{'Macho':'Macho','F&ecirc;mea':'F&ecirc;mea','selected':'Selecionar'}",
					type       :'select',
					submit     :'Editar',
					cancel     :'Cancelar',
					width      :100,
					submitdata :{t_t:t_t_l,c_i:c_i_l,c_i_v:c_i_v_l,c_t:"_genero"}
				}
			);
			
			$("#clinica").editable("/application/controller/plugins/indexEditar.php",
				{
					indicator  :'Salvando',
					loadurl    :'/application/controller/plugins/indexListarClinicas.php',
					type       :'select',
					submit     :'Editar',
					cancel     :'Cancelar',
					width      :100,
					submitdata :{t_t:t_t_l,c_i:c_i_l,c_i_v:c_i_v_l,c_t:"_clinica_titulo"}
				}
			);
			
			var t_t   = "laudos_ml_bioquimica";
			var c_i   = "_id";
			var c_i_v = $("#_id").attr("indice");
			
			$(".e_").live('click',function(){
				var numero = $(this).attr("numero");
				var celula = $(this).attr("celula");
				$(".e_" + numero).editable("/application/controller/plugins/indexEditar.php",
					{
						indicator  :'Salvando',
						width      :200,
						submitdata :{t_t:t_t,c_i:c_i,c_i_v:c_i_v,c_t:celula}
					}
				);
			});
			
			$(".ed_").live('click',function(){
				var numero = $(this).attr("numero");
				var celula = $(this).attr("celula");
				$(".ed_" + numero).editable("/application/controller/plugins/indexEditar.php",
					{
						indicator  :'Salvando',
						type       :'textarea',
						width      :550,
						height     :250,
						submit     :'Salvar',
						cancel     :'Cancelar',
						submitdata :{t_t:t_t,c_i:c_i,c_i_v:c_i_v,c_t:celula}
					}
				);
			});
			
		});
        
        </script>
	
    <link type="text/css" rel="stylesheet" media="screen" href="/public/styles/sistema_formularios.css" />
    
	<style type="text/css">
	span{display:block;}
    </style>
	
</head>

<body>

<div id="usuario">

	<div id="titulo">[ <a href="<?php echo $url_n;?>" title="<?php echo $paginas;?>">Voltar</a> ]</div>

</div>

<div id="sair">

	<div id="titulo">
	[ <a href="<?php echo LMPaginas::Impressao($Exame[_protocolo]);?>" target="_blank" title="Imprimir Protocolo: <?php echo $Exame[_protocolo];?>">Imprimir</a> ]
	</div>

</div>

<br />

<br />

<?php include("application/controller/plugins/indexModeloProtocolo.php");?>

<fieldset>
	
	<legend align="center">Laudo Bioquimica</legend>
	
	<span id="_id" indice="<?php echo $Exame[_id];?>"></span>
	
    <label>
    
	<strong>Albumina</strong>
	
    <span class="e_" numero="3" celula="_albumina"><span class="e_3"><?php echo $Exame[_albumina];?></span></span>
	
    </label>
    
    <label>
	
	<strong>Albumina Amostra</strong>
	
    <span class="e_" numero="4" celula="_albumina_a"><span class="e_4"><?php echo $Exame[_albumina_a];?></span></span>
	
    </label>
    
    <label>
	
	<strong>TGP</strong>
	
    <span class="e_" numero="5" celula="_tgp"><span class="e_5"><?php echo $Exame[_tgp];?></span></span>
	
	</label>
    
    <label>
    
	<strong>TGP Amostra</strong>
	
    <span class="e_" numero="6" celula="_tgp_a"><span class="e_6"><?php echo $Exame[_tgp_a];?></span></span>
	
	</label>
    
    <label>
    
	<strong>Amilase</strong>
	
    <span class="e_" numero="7" celula="_amilase"><span class="e_7"><?php echo $Exame[_amilase];?></span></span>
	
    </label>
    
    <label>
    
	<strong>Amilase Amostra</strong>
	
        <span class="e_" numero="8" celula="_amilase_a"><span class="e_8"><?php echo $Exame[_amilase_a];?></span></span>
        
    </label>
    
    <!--
    
    <label>
    
	<strong>Amonia</strong>
	
    <span class="e_" numero="66" celula="_amonia_r"><span class="e_66"><?php // echo $Exame[_amonia_r];?></span></span>
	
    </label>
    
    <label>
    
	<strong>Amonia M&eacute;todo</strong>
	
    <span class="e_" numero="65" celula="_amonia_m"><span class="e_65"><?php // echo $Exame[_amonia_m];?></span></span>
	
    </label>
    
    <label>
    
	<strong>Amonia Refer&ecirc;ncia Canino</strong>
	
    <span class="e_" numero="67" celula="_amonia_c"><span class="e_67"><?php // echo $Exame[_amonia_c];?></span></span>
	
    </label>
    
    <label>
    
	<strong>Amonia Refer&ecirc;ncia Felino</strong>
	
    <span class="e_" numero="68" celula="_amonia_f"><span class="e_68"><?php // echo $Exame[_amonia_f];?></span></span>
	
    </label>
    
    -->
    
    <label>
    
	<strong>TGO</strong>
	
    <span class="e_" numero="9" celula="_tgo"><span class="e_9"><?php echo $Exame[_tgo];?></span></span>
	
    </label>
    
    <label>
	
	<strong>TGO Amostra</strong>
	
    <span class="e_" numero="10" celula="_tgo_a"><span class="e_10"><?php echo $Exame[_tgo_a];?></span></span>
	
    </label>
    
    <label>
	
	<strong>Bilirrubina Total</strong>
	
    <span class="e_" numero="11" celula="_bilirrubina_total"><span class="e_11"><?php echo $Exame[_bilirrubina_total];?></span></span>
	
	</label>
    
    <label>
    
	<strong>Bilirrubina Total Amostra</strong>
	
    <span class="e_" numero="12" celula="_bilirrubina_total_a"><span class="e_12"><?php echo $Exame[_bilirrubina_total_a];?></span></span>
	
	</label>
    
    <label>
    
	<strong>Bilirrubina Direta</strong>
	
    <span class="e_" numero="13" celula="_bilirrubina_direta"><span class="e_13"><?php echo $Exame[_bilirrubina_direta];?></span></span>
	
	</label>
    
    <label>
    
	<strong>Bilirrubina Direta Amostra</strong>
	
    <span class="e_" numero="14" celula="_bilirrubina_direta_a"><span class="e_14"><?php echo $Exame[_bilirrubina_direta_a];?></span></span>
	
    </label>
    
	<label>
    
	<strong>Bilirrubina Indireta</strong>
	
    <span class="e_" numero="15" celula="_bilirrubina_indireta"><span class="e_15"><?php echo $Exame[_bilirrubina_indireta];?></span></span>
	
    </label>
    
    <label>
    
	<strong>Bilirrubina Indireta Amostra</strong>
	
    <span class="e_" numero="16" celula="_bilirrubina_indireta_a"><span class="e_16"><?php echo $Exame[_bilirrubina_indireta_a];?></span></span>
	
    </label>
    
    <label>
	
	<strong>Calcio</strong>
	
    <span class="e_" numero="17" celula="_calcio"><span class="e_17"><?php echo $Exame[_calcio];?></span></span>
    
    </label>
    
    <label>
	
	<strong>Calcio Amostra</strong>
	
    <span class="e_" numero="18" celula="_calcio_a"><span class="e_18"><?php echo $Exame[_calcio_a];?></span></span>
	
	</label>
    
    <label class="linha">
    
	<strong>Cloreto</strong>
	
    <span class="e_" numero="69" celula="_cloro"><span class="e_69"><?php echo $Exame[_cloro];?></span></span>
	
	</label>
    
    <label>
    
	<strong>Colesterol</strong>
	
    <span class="e_" numero="19" celula="_colesterol"><span class="e_19"><?php echo $Exame[_colesterol];?></span></span>
	
	</label>
    
    <label>
    
	<strong>Colesterol Amostra</strong>
	
    <span class="e_" numero="20" celula="_colesterol_a"><span class="e_20"><?php echo $Exame[_colesterol_a];?></span></span>
	
    </label>
    
    <label class="linha">
    
	<strong>Colesterol HDL</strong>
	
    <span class="e_" numero="19-1" celula="_colesterol_hdl"><span class="e_19-1"><?php echo $Exame[_colesterol_hdl];?></span></span>
	
	</label>
    
    <label>
    
	<strong>Colesterol LDL</strong>
	
    <span class="e_" numero="19-2" celula="_colesterol_ldl"><span class="e_19-2"><?php echo $Exame[_colesterol_ldl];?></span></span>
	
	</label>
    
    <label>
    
	<strong>Colesterol VLDL</strong>
	
    <span class="e_" numero="19-3" celula="_colesterol_vldl"><span class="e_19-3"><?php echo $Exame[_colesterol_vldl];?></span></span>
	
	</label>
    
    <label class="linha">
	
	<strong>Creatina Quinase</strong>
	
    <span class="e_" numero="21" celula="_creatina_q"><span class="e_21"><?php echo $Exame[_creatina_q];?></span></span>
	
    </label>
    
    <label>
	
	<strong>Creatina Quinase Amostra</strong>
	
    <span class="e_" numero="22" celula="_creatina_q_a"><span class="e_22"><?php echo $Exame[_creatina_q_a];?></span></span>
	
	</label>
    
    <label>
    
	<strong>Creatinina</strong>
	
    <span class="e_" numero="23" celula="_creatinina"><span class="e_23"><?php echo $Exame[_creatinina];?></span></span>
	
    </label>
    
    <label>
    
	<strong>Creatinina Amostra</strong>
	
    <span class="e_" numero="24" celula="_creatinina_a"><span class="e_24"><?php echo $Exame[_creatinina_a];?></span></span>
	
    </label>
    
    <label class="linha">
    
	<strong>Ferro</strong>
	
    <span class="e_" numero="70" celula="_ferro"><span class="e_70"><?php echo $Exame[_ferro];?></span></span>
	
	</label>
    
    <label>
    
	<strong>Fosfatase Alcalina</strong>
	
    <span class="e_" numero="25" celula="_fosfatase_a"><span class="e_25"><?php echo $Exame[_fosfatase_a];?></span></span>
	
	</label>
    
    <label>
    
	<strong>Fosfatase Alcalina Amostra</strong>
	
    <span class="e_" numero="26" celula="_fosfatase_a_a"><span class="e_26"><?php echo $Exame[_fosfatase_a_a];?></span></span>
	
	</label>
    
    <label class="linha">
    
	<strong>Fosforo</strong>
	
    <span class="e_" numero="27" celula="_fosforo"><span class="e_27"><?php echo $Exame[_fosforo];?></span></span>
	
    </label>
    
    <!--
	
    <label>
    
	<strong>Fosforo Valor</strong>
	
    <span class="e_" numero="28" celula="_fosforo_v"><span class="e_28"><?php // echo $Exame[_fosforo_v];?></span></span>
	
	</label>
    
    <label>
    
	<strong>Fosforo Amostra</strong>
	
    <span class="e_" numero="29" celula="_fosforo_a"><span class="e_29"><?php // echo $Exame[_fosforo_a];?></span></span>
	
	</label>
    
    <label>
    
	<strong>Fosforo M&eacute;todo</strong>
	
    <span class="e_" numero="30" celula="_fosforo_m"><span class="e_30"><?php // echo $Exame[_fosforo_m];?></span></span>
	
    </label>
    
    -->
	
    <label class="linha">
    
	<strong>Frutosamina</strong>
	
    <span class="e_" numero="31" celula="_frutosamina"><span class="e_31"><?php echo $Exame[_frutosamina];?></span></span>
	
    </label>
    
    <!--
	
    <label>
    
	<strong>Frutosamina Valor</strong>
	
    <span class="e_" numero="32" celula="_frutosamina_v"><span class="e_32"><?php // echo $Exame[_frutosamina_v];?></span></span>
	
	</label>
    
    <label>
    
	<strong>Frutosamina Amostra</strong>

	
    <span class="e_" numero="33" celula="_frutosamina_a"><span class="e_33"><?php // echo $Exame[_frutosamina_a];?></span></span>
	
	</label>
    
    <label>
    
	<strong>Frutosamina M&eacute;todo</strong>
	
    <span class="e_" numero="34" celula="_frutosamina_m"><span class="e_34"><?php // echo $Exame[_frutosamina_m];?></span><label></span>
	
    </label>
    
    -->
	
    <label>
    
	<strong>Gama</strong>
	
    <span class="e_" numero="35" celula="_gama_g"><span class="e_35"><?php echo $Exame[_gama_g];?></span></span>
	
	</label>
    
    <label>
    
	<strong>Gama Amostra</strong>
	
    <span class="e_" numero="36" celula="_gama_g_a"><span class="e_36"><?php echo $Exame[_gama_g_a];?></span></span>
	
	</label>
    
    <label>
    
	<strong>Glicose</strong>
	
    <span class="e_" numero="37" celula="_glicose"><span class="e_37"><?php echo $Exame[_glicose];?></span></span>
	
	</label>
    
    <label>
    
	<strong>Glicose Amostra</strong>
	
    <span class="e_" numero="38" celula="_glicose_a"><span class="e_38"><?php echo $Exame[_glicose_a];?></span></span>
	
	</label>
    
    <label>
    
	<strong>Globulinas</strong>
	
    <span class="e_" numero="39" celula="_globulinas"><span class="e_39"><?php echo $Exame[_globulinas];?></span></span>
	
	</label>
    
    <label>
    
	<strong>Globulinas Amostra</strong>
	
    <span class="e_" numero="40" celula="_globulinas_a"><span class="e_40"><?php echo $Exame[_globulinas_a];?></span></span>
	
	</label>
    
    <!--
    
    <label class="linha">
    
	<strong>Globulinas M&eacute;todo</strong>
	
    <span class="e_" numero="41" celula="_globulinas_m"><span class="e_41"><?php // echo $Exame[_globulinas_m];?></span></span>
	
	</label>
    
    <label>
    
	<strong>Hemoglobina</strong>
	
    <span class="e_" numero="42" celula="_hemoglobina"><span class="e_42"><?php // echo $Exame[_hemoglobina];?></span></span>
	
	</label>
    
    <label>
    
	<strong>Hemoglobina Amostra</strong>
	
    <span class="e_" numero="43" celula="_hemoglobina_a"><span class="e_43"><?php // echo $Exame[_hemoglobina_a];?></span></span>
	
	</label>
    
    -->
    
    <label class="linha">
    
	<strong>LDH</strong>
	
    <span class="e_" numero="44" celula="_ldh"><span class="e_44"><?php echo $Exame[_ldh];?></span></span>
	
	</label>
    
    <label>
    
	<strong>LDH Valor</strong>
	
    <span class="e_" numero="45" celula="_ldh_v"><span class="e_45"><?php echo $Exame[_ldh_v];?></span></span>
	
	</label>
    
    <label>
    
	<strong>LDH Amostra</strong>
	
    <span class="e_" numero="46" celula="_ldh_a"><span class="e_46"><?php echo $Exame[_ldh_a];?></span></span>
	
	</label>
    
    <label>
    
	<strong>Lipase</strong>
	
    <span class="e_" numero="47" celula="_lipase"><span class="e_47"><?php echo $Exame[_lipase];?></span></span>
	
	</label>
    
    <label>
    
	<strong>Lipase Amostra</strong>
	
    <span class="e_" numero="48" celula="_lipase_a"><span class="e_48"><?php echo $Exame[_lipase_a];?></span></span>
	
	</label>
    
    <label class="linha">
    
	<strong>Magnesio</strong>
	
    <span class="e_" numero="49" celula="_magnesio"><span class="e_49"><?php echo $Exame[_magnesio];?></span></span>
	
    </label>
    
    <!--
	
    <label>
    
	<strong>Magnesio Valor</strong>
	
    <span class="e_" numero="50" celula="_magnesio_a"><span class="e_50"><?php // echo $Exame[_magnesio_v];?></span></span>
	
	</label>
    
    <label>
    
	<strong>Magnesio Amostra</strong>
	
    <span class="e_" numero="51" celula="_magnesio_a"><span class="e_51"><?php // echo $Exame[_magnesio_a];?></span></span>
	
    </label>
    
	<label>
    
	<strong>Magnesio M&eacute;todo</strong>
	
    <span class="e_" numero="52" celula="_magnesio_m"><span class="e_52"><?php // echo $Exame[_magnesio_m];?></span></span>
	
    </label>
    
    -->
	
    <label class="linha">
    
	<strong>Potassio</strong>
	
    <span class="e_" numero="53" celula="_potassio"><span class="e_53"><?php echo $Exame[_potassio];?></span></span>
    
	</label>
    
    <label>
    
	<strong>Potassio Amostra</strong>
	
    <span class="e_" numero="55" celula="_potassio_a"><span class="e_55"><?php echo $Exame[_potassio_a];?></span></span>
	
    </label>
    
    <label>
    
	<strong>Potassio M&eacute;todo</strong>
	
    <span class="e_" numero="550" celula="_potassio_m"><span class="e_550"><?php echo $Exame[_potassio_m];?></span></span>
	
    </label>
    
    <label class="mensagem">
    
	<strong>Potassio Valor Refer&ecirc;ncia</strong>
    
    <span class="ed_" numero="54" celula="_potassio_v"><span class="ed_54"><?php echo nl2br($Exame[_potassio_v]);?></span></span>
	
	</label>
    
	<label>
    
	<strong>Proteina Total</strong>
	
    <span class="e_" numero="56" celula="_proteina_total"><span class="e_56"><?php echo $Exame[_proteina_total];?></span></span>
	
	</label>
    
    <label>
    
	<strong>Proteina Total Amostra</strong>
	
    <span class="e_" numero="57" celula="_proteina_total_a"><span class="e_57"><?php echo $Exame[_proteina_total_a];?></span></span>
	
    </label>
    
    <label class="linha">
    
	<strong>Sodio</strong>
	
    <span class="e_" numero="58" celula="_sodio"><span class="e_58"><?php echo $Exame[_sodio];?></span></span>
	
	</label>
    
    <label>
    
	<strong>Sodio Amostra</strong>
	
    <span class="e_" numero="59" celula="_sodio_a"><span class="e_59"><?php echo $Exame[_sodio_a];?></span></span>
	
	</label>
    
    <label>
    
	<strong>Sodio M&eacute;todo</strong>
	
    <span class="e_" numero="590" celula="_sodio_m"><span class="e_590"><?php echo $Exame[_sodio_m];?></span></span>
	
	</label>
    
    <label>
    
	<strong>Triglicerideos</strong>
	
    <span class="e_" numero="60" celula="_triglicerideos"><span class="e_60"><?php echo $Exame[_triglicerideos];?></span></span>
	
	</label>
    
    <label>
    
	<strong>Triglicerideos Amostra</strong>
    
	<span class="e_" numero="61" celula="_triglicerideos_a"><span class="e_61"><?php echo $Exame[_triglicerideos_a];?></span></span>
	
	</label>
    
    <label>
    
	<strong>Ureia</strong>
	
    <span class="e_" numero="62" celula="_ureia"><span class="e_62"><?php echo $Exame[_ureia];?></span></span>
	
	</label>
    
    <label>
    
	<strong>Ureia Amostra</strong>
    
	<span class="e_" numero="63" celula="_ureia_a"><span class="e_63"><?php echo $Exame[_ureia_a];?></span></span>
	
    </label>
    
    <!--
    
    <label class="mensagem">
    
	<strong>Outros</strong>
	
    <span class="ed_" numero="64" celula="_outros"><span class="ed_64"><?php echo nl2br($Exame[_outros]); ?></span></span>
    
    </label>
    
    -->
    
    <label class="mensagem">
		
	<strong>Observa&ccedil;&atilde;o</strong>
	
    <span class="ed_" numero="65" celula="_observacao"><span class="ed_65"><?php echo nl2br($Exame[_observacao]);?></span></span>
    
    </label>
	
	<label class="linha"></label>
	
</fieldset>

</body>

</html>