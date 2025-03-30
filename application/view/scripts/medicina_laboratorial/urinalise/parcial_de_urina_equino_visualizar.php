
<?php

$Exames  = $SQL -> Consultar("SELECT * FROM protocolos, laudos_ml_u_parcial_de_urina_equino WHERE protocolo_id = '$indice' AND _laudo = '$indice'");

$Exame   = mysql_fetch_array($Exames);

$implode = Functions::retorna_data('-','/',$Exame[_data]);

$Numero  = 1;

$paginas = str_replace("_visualizar","",$_GET['pagina']);
// URL Primária sem Listagem
$url_p    = LMPaginas::Pagina($paginas);
// URL Secundária com Listagem
$url_s    = LMPaginas::Listar($paginas,$indices);
// URL Nova
$url_n  = !empty($indices) ? $url_s : $url_p;

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
			
			var t_t   = "laudos_ml_u_parcial_de_urina_equino";
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
	
	<legend align="center">Laudo Parcial de Urina Equino</legend>
	
    <span id="_id" indice="<?php echo $Exame[_id];?>"></span>
	
    <label class="linha">&nbsp;</label>
    
	<label class="linha"><strong>Exame F&iacute;sico</strong></label>
	
    <label>
    
	<strong>Volume</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_volume"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_volume];?></span></span>
	
    </label>
    
    <label>
    
	<strong>Densidade</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_densidade"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_densidade];?></span></span>
	
    </label>
    
    <label>
    
	<strong>Aspecto</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_aspecto"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_aspecto];?></span></span>
    
    </label>
    
    <label>
    
	<strong>Cor</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_cor"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_cor];?></span></span>
	
    </label>
    
    <label>
    
	<strong>Ph</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_ph"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_ph];?></span></span>
	
    </label>
    
    <label class="linha">&nbsp;</label>
    
	<label class="linha"><strong>Exame Qu&iacute;mico</strong></label>
	
    <label>
    
	<strong>Proteinas</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_proteinas"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_proteinas];?></span></span>
	
    </label>
    
    <label>
    
	<strong>Glicose</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_glicose"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_glicose];?></span></span>
	
    </label>
    
    <label>
    
	<strong>Corpos Cetonicos</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_corpos_c"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_corpos_c];?></span></span>
	
    </label>
    
    <label>
    
	<strong>Bilirrubina</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_bilirrubina"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_bilirrubina];?></span></span>
	
    </label>
    
    <label>
    
	<strong>Urobilinogenio</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_urobilinogenio"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_urobilinogenio];?></span></span>
	
    </label>
    
    <label>
    
	<strong>Nitrito</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_nitrito"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_nitrito];?></span></span>
	
    </label>
    
    <label>
    
	<strong>Sangue</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_sangue"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_sangue];?></span></span>
	
    </label>
    
    <label class="linha">&nbsp;</label>
    
	<label class="linha"><strong>Exame Microsc&oacute;pico</strong></label>
	
    <label>
    
	<strong>Celulas</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_celulas"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_celulas];?></span></span>
	
    </label>
    
    <label>
    
	<strong>Leucocitos</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_leucocitos"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_leucocitos];?></span></span>
	
    </label>
    
    <label>
    
	<strong>Hemacias</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_hemacias"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_hemacias];?></span></span>
	
    </label>
    
    <label>
    
	<strong>Filamentos Muco</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_filamentos_m"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_filamentos_m];?></span></span>
	
    </label>
    
    <label>
    
	<strong>Cilindros</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_cilindros"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_cilindros];?></span></span>
	
    </label>
    
    <label>
    
	<strong>Cristais</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_cristais"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_cristais];?></span></span>
	
    </label>
    
    <label class="linha">&nbsp;</label>
    
    <label class="mensagem">
    
	<strong>Observa&ccedil;&atilde;o</strong>
    
    <span class="ed_" numero="<?php echo $Numero;?>" celula="_observacao"><span class="ed_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo nl2br($Exame[_observacao]);?></span></span>
	
    </label>
    
	<label class="linha"></label>
	
</fieldset>

</body>

</html>