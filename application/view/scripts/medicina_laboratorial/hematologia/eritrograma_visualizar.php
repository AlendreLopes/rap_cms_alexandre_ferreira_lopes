<?php

$Exames  = $SQL -> Consultar("SELECT * FROM protocolos, laudos_ml_h_eritrograma WHERE protocolo_id = '$indice' AND _laudo = '$indice'");

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

$Otimizar = $SQL -> Atualizar("OPTIMIZE TABLE protocolos, laudos_ml_h_eritrograma");

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
			
			var t_t   = "laudos_ml_h_eritrograma";
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
	
	<legend align="center">Laudo Eritrograma</legend>
	
	<span id="_id" indice="<?php echo $Exame[_id];?>"></span>
	
    <label>
    
	<strong>Hemaceas</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_hemaceas"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_hemaceas];?></span></span>
	
    </label>
    
    <label>
    
	<strong>Hemoglobina</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_hemoglobina"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_hemoglobina];?></span></span>
	
    </label>
    
    <label>
    
	<strong>Hematocrito</strong>
    
    <span class="e_" numero="<?php echo $Numero;?>" celula="_hematocrito"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_hematocrito];?></span></span>
	
    </label>
    
    <label class="linha">
    
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
    
    <label class="mensagem">
    
	<strong>Observa&ccedil;&atilde;o</strong>
    
    <span class="ed_" numero="<?php echo $Numero;?>" celula="_observacao"><span class="ed_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo nl2br($Exame[_observacao]);?></span></span>
	
    </label>
    
	<label class="linha"></label>
	
</fieldset>

</body>

</html>