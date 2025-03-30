<?php

$Exames  = $SQL -> Consultar("SELECT * FROM protocolos, laudos_ml_h_hemograma_i WHERE protocolo_id = '$indice' AND _laudo = '$indice'");

$Exame   = mysql_fetch_array($Exames);

$implode = Functions::retorna_data('-','/',$Exame[_data]);

$Numero  = 1;

$paginas = str_replace("_visualizar","",$_GET['pagina']);
// URL Primária sem Listagem
$url_p    = LMPaginas::Pagina($paginas);
// URL Secundária com Listagem
$url_s    = LMPaginas::Listar($paginas,$indices);
// URL Nova
$url_n    = !empty($indices) ? $url_s : $url_p;

$Otimizar = $SQL -> Atualizar("OPTIMIZE TABLE protocolos, laudos_ml_h_hemograma_i");

?>
<!DOCTYPE html>

<html>

<head>

	<title>Visualizar</title>
	
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
			
			var t_t   = "laudos_ml_h_hemograma_i";
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
			// Texto simple por extenso
			$(".ex_").live('click',function(){
				var numero = $(this).attr("numero");
				var celula = $(this).attr("celula");
				$(".ex_" + numero).editable("/application/controller/plugins/indexEditar.php",
					{
						indicator  :'Salvando',
						width      :600,
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
	
	<legend align="center">Laudo Hemograma I</legend>
	
	<span id="_id" indice="<?php echo $Exame[_id];?>"></span>
	
    <label>
    
	<strong>Hemaceas</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_hemaceas"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_hemaceas];?></span></span>
	
    </label>
    
    <label>
    
	<strong>Hemoglobina</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_hemoglobina"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_hemoglobina];?></span></span>
	
    </label>
    
    <label class="linha">
    
	<strong>Hematocrito</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_hematocrito"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_hematocrito];?></span></span>
	
    </label>
    
    <label>
    
	<strong>VCM</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_vcm"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_vcm];?></span></span>
	
    </label>
    
    <label>
    
	<strong>HCM</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_hcm"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_hcm];?></span></span>
	
    </label>
    
    <label>
    
	<strong>CHCM</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_chcm"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_chcm];?></span></span>
	
    </label>
    
    <label class="por_extenso">
    
	<strong>Aspecto Celular</strong>
    
    <span class="ex_" numero="<?php echo $Numero;?>" celula="_aspecto_celular"><span class="ex_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_aspecto_celular];?></span></span>
    
    </label>
	
    <label class="linha">
    
	<strong>Leucocitos</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_leucocitos"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_leucocitos];?></span></span>
	
    </label>
    
	<label class="linha">
	
	<strong>Eosinofilos</strong>
	
	</label>
	
    <label>
    
	<strong>Absoluto</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_eosinofilos_a"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_eosinofilos_a];?></span></span>
	
    </label>
    
    <label>
    
	<strong>Relativo</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_eosinofilos_r"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_eosinofilos_r];?></span></span>
	
    </label>
    
	<label class="linha">
	
	<strong>Linfocitos</strong>
	
	</label>
	
    <label>
    
	<strong>Absoluto</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_linfocitos_a"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_linfocitos_a];?></span></span>
	
    </label>
    
    <label>
    
	<strong>Relativo</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_linfocitos_r"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_linfocitos_r];?></span></span>
	
    </label>
    
	<label class="linha">
	
	<strong>Monocitos</strong>
	
	</label>
	
    <label>
    
	<strong>Absoluto</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_monocitos_a"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_monocitos_a];?></span></span>
	
    </label>
    
    <label>
    
	<strong>Relativo</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_monocitos_r"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_monocitos_r];?></span></span>
	
    </label>
    
	<label class="linha">
	
	<strong>Bastonetes</strong>
	
	</label>
	
    <label>
    
	<strong>Absoluto</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_bastonetes_a"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_bastonetes_a];?></span></span>
	
    </label>
    
    <label>
    
	<strong>Relativo</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_bastonetes_r"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_bastonetes_r];?></span></span>
	
    </label>
    
	<label class="linha">
	
	<strong>Segmentados</strong>
	
	</label>
	
    <label>
    
	<strong>Absoluto</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_segmentados_a"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_segmentados_a];?></span></span>
	
    </label>
    
    <label>
    
	<strong>Relativo</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_segmentados_r"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_segmentados_r];?></span></span>
	
    </label>
	<label class="linha">
	
	<strong>Bas&oacute;filos</strong>
	
	</label>
	
    <label>
    
	<strong>Absoluto</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_basofilos_a"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_basofilos_a];?></span></span>
	
    </label>
    
    <label>
    
	<strong>Relativo</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_basofilos_r"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_basofilos_r];?></span></span>
	
    </label>
	
    <!--
    
	<label class="linha">
	
	<strong>Outros</strong>
	
    <span class="e_" numero="<?php // echo $Numero;?>" celula="_outros"><span class="e_<?php // echo $Numero;?>" <?php // $Numero ++;?>><?php // echo $Exame[_outros];?></span></span>
    
	</label>
	
    <label>
    
	<strong>Absoluto</strong>
    
    <span class="e_" numero="<?php // echo $Numero;?>" celula="_outros_a"><span class="e_<?php // echo $Numero;?>" <?php // $Numero ++;?>><?php // echo $Exame[_outros_a];?></span></span>
	
    </label>
    
    <label>
    
	<strong>Relativo</strong>
    
    <span class="e_" numero="<?php // echo $Numero;?>" celula="_outros_r"><span class="e_<?php // echo $Numero;?>" <?php // $Numero ++;?>><?php // echo $Exame[_outros_r];?></span></span>
	
    </label>
    
    <label>
    
	<strong>Refer&ecirc;ncia C&atilde;o</strong>
    
    <span class="e_" numero="<?php // echo $Numero;?>" celula="_outros_n_a"><span class="e_<?php // echo $Numero;?>" <?php // $Numero ++;?>><?php // echo $Exame[_outros_n_a];?></span></span>
	
    </label>
    
    <label>
    
	<strong>Refer&ecirc;ncia Gato</strong>
    
    <span class="e_" numero="<?php // echo $Numero;?>" celula="_outros_n_b"><span class="e_<?php // echo $Numero;?>" <?php // $Numero ++;?>><?php // echo $Exame[_outros_n_b];?></span></span>
	
    </label>
    
    -->
    
	<label class="linha"></label>
	
    <label>
    
	<strong>Plaquetas</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_plaquetas"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_plaquetas];?></span></span>
	
    </label>
	
    <label class="linha"></label>
    
    <label class="por_extenso">
    
	<strong>Observa&ccedil;&atilde;o</strong>
    
    <span class="ex_" numero="<?php echo $Numero;?>" celula="_observacao"><span class="ex_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo nl2br($Exame[_observacao]);?></span></span>
	
    </label>
    
	<label class="linha"></label>
	
</fieldset>

<br clear="all" />

<br clear="all" />

</body>

</html>