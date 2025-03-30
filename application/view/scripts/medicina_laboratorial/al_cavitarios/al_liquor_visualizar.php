<?php

$Exames  = $SQL -> Consultar("SELECT * FROM protocolos, laudos_ml_al_liquor WHERE protocolo_id = '$indice' AND _laudo = '$indice'");

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

$Otimizar = $SQL -> Atualizar("OPTIMIZE TABLE protocolos, laudos_ml_al_liquor");

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
			
			var t_t   = "laudos_ml_al_liquor";
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
	
	<legend align="center">Laudo A L Liquor</legend>
	
	<span id="_id" indice="<?php echo $Exame[_id];?>"></span>
	
    <label class="linha">
    
    Exame F&iacute;sico
    
    </label>
    
    <label>
    
	<strong>Volume</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_volume"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_volume];?></span></span>
    
    </label>
	
    <label>
    
	<strong>Cor</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_cor"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_cor];?></span></span>
    
    </label>
	
    <label>
	
	<strong>Aspecto</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_aspecto"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_aspecto];?></span></span>
	
    </label>
    
    <label>
	
	<strong>Odor</strong>
	
    <span class="e_" numero="<?php echo $Numero;?>" celula="_odor"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_odor];?></span></span>
	
    </label>
    
    <label>
	
	<strong>Densidade</strong>
	
    <span class="e_" numero="<?php echo $Numero;?>" celula="_densidade"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_densidade];?></span></span>
	
    </label>
    
    <label>
    
	<strong>Sedimento</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_sedimento"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_sedimento];?></span></span>
    
    </label>
    
    <label>
	
	<strong>Cor do Sobrenadante</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_cor_sobrenadante"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_cor_sobrenadante];?></span></span>
    
    </label>
    
    <label class="linha"></label>
    
    <label class="linha">
    
    Exame Citol&oacute;gico
    
    </label>
    
    <label>
    
	<strong>C&eacute;lulas nucleadas</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_celulas_nucleadas"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_celulas_nucleadas];?></span></span>
    
    </label>
    
    <label>
	
	<strong>Eritrocitos</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_eritrocitos"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_eritrocitos];?></span></span>
	
    </label>
    
    <label class="mensagem">
    
    <strong>Contagem Diferencial</strong>
    
    <span class="ed_" numero="<?php echo $Numero;?>" celula="_contagem_diferencial"><span class="ed_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_contagem_diferencial];?></span></span>
	
    </label>
    
    <label class="linha"></label>
    
    <label class="linha">
    
    Exame Qu&iacute;mico
    
    </label>
    
    <label>
	
    <strong>Glicose</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_glicose"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_glicose];?></span></span>
	
    </label>
    
    <label>
	
    <strong>Ph</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_ph"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_ph];?></span></span>
	
    </label>
    
    <label>
    
	<strong>Proteinas</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_proteinas"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_proteinas];?></span></span>
	
    </label>
    
    <label>
    
	<strong>Sangue Oculto</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_sangue_oculto"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_sangue_oculto];?></span></span>
	
    </label>
    
    <label>
    
	<strong>Coagulo</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_coagulo"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_coagulo];?></span></span>
	
    </label>
    
    <label>
    
	<strong>Globulinas</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_globulinas"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_globulinas];?></span></span>
	
    </label>
    
    <label class="mensagem">
    
	<strong>Observa&ccedil;&atilde;o</strong>
    
    <span class="ed_" numero="<?php echo $Numero;?>" celula="_observacao"><span class="ed_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo  nl2br($Exame[_observacao]);?></span></span>
	
    </label>
	
</fieldset>


</body>

</html>