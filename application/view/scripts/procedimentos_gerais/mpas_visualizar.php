<?php

$Exames  = $SQL -> Consultar("SELECT * FROM protocolos, laudos_sc_mpas WHERE protocolo_id = '$indice' AND _laudo = '$indice'");

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

$Otimizar = $SQL -> Atualizar("OPTIMIZE TABLE laudos_sc_mpas");

?>
<!DOCTYPE html>

<html>

<head>

	<title>Visualizar</title>
	
	<script type="text/javascript" src="/library/plugins/editable/jquery_jeditable.js"></script>
	
	<script type="text/javascript">
		$(document).ready(function(){
			/*
			* @param
			* t_t  : titulo_tabela,
			* c_i  : celula_id,
			* c_i_v: celula_id_valor,
			* c_t  : celula_titulo,
			* c_t_v: celula_titulo_valor
			*/
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
			
			var t_t   = "laudos_sc_mpas";
			var c_i   = "_id";
			var c_i_v = $("#_id").attr("indice");
			
			$(".e_").live('click',function(){
				var numero = $(this).attr("numero");
				var celula = $(this).attr("celula");
				$(".e_" + numero).editable("/application/controller/plugins/indexEditar.php",
					{
						indicator  :'Salvando',
						width      :80,
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
	
	<legend align="center">Laudo MPAs</legend>
	
	<span id="_id" indice="<?php echo $Exame[_id];?>"></span>
	
	<table class="tablesorter" cellpadding="1">
	
	<thead>
		<tr>
		<th scope="col" width="5%">Tomadas</th>
		<th scope="col" width="15%">Sist&oacute;lica</th>
		<th scope="col" width="5%">&nbsp;</th>
		<th scope="col" width="15%">Diast&oacute;lica</th>
		<th scope="col" width="5%">&nbsp;</th>
		<th scope="col" width="15%">M&eacute;dia</th>
		<th scope="col" width="5%">&nbsp;</th>
		</tr>
	</thead>
	<tfoot>
		<tr>
		<th scope="col" width="5%">Tomadas</th>
		<th scope="col" width="15%">Sist&oacute;lica</th>
		<th scope="col" width="5%">&nbsp;</th>
		<th scope="col" width="15%">Diast&oacute;lica</th>
		<th scope="col" width="5%">&nbsp;</th>
		<th scope="col" width="15%">M&eacute;dia</th>
		<th scope="col" width="5%">&nbsp;</th>
		</tr>
	</tfoot>
	
	<tbody>
		<tr>
		<td>1</td>
		<td>
		<span class="e_" numero="<?php echo $Numero;?>" celula="_sistolica_1"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_sistolica_1];?></span></span>
        </td>
		<td>mmHg</td>
		<td>
		<span class="e_" numero="<?php echo $Numero;?>" celula="_diastolica_1"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_diastolica_1];?></span></span>
        </td>
		<td>mmHg</td>
		<td>
		<span class="e_" numero="<?php echo $Numero;?>" celula="_media_1"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_media_1];?></span></span>
        </td>
		<td>mmHg</td>
		</tr>
		<tr>
		<td>2</td>
		<td>
		<span class="e_" numero="<?php echo $Numero;?>" celula="_sistolica_2"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_sistolica_2];?></span></span>
        </td>
		<td>mmHg</td>
		<td>
		<span class="e_" numero="<?php echo $Numero;?>" celula="_diastolica_2"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_diastolica_2];?></span></span>
        </td>
		<td>mmHg</td>
		<td>
		<span class="e_" numero="<?php echo $Numero;?>" celula="_media_2"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_media_2];?></span></span>
        </td>
		<td>mmHg</td>
		</tr>
		<tr>
		<td>3</td>
		<td>
		<span class="e_" numero="<?php echo $Numero;?>" celula="_sistolica_3"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_sistolica_3];?></span></span>
        </td>
		<td>mmHg</td>
		<td>
		<span class="e_" numero="<?php echo $Numero;?>" celula="_diastolica_3"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_diastolica_3];?></span></span>
        </td>
		<td>mmHg</td>
		<td>
		<span class="e_" numero="<?php echo $Numero;?>" celula="_media_3"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_media_3];?></span></span>
        </td>
		<td>mmHg</td>
		</tr>
		<tr>
		<td>4</td>
		<td>
		<span class="e_" numero="<?php echo $Numero;?>" celula="_sistolica_4"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_sistolica_4];?></span></span>
        </td>
		<td>mmHg</td>
		<td>
		<span class="e_" numero="<?php echo $Numero;?>" celula="_diastolica_4"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_diastolica_4];?></span></span>
        </td>
		<td>mmHg</td>
		<td>
		<span class="e_" numero="<?php echo $Numero;?>" celula="_media_4"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_media_4];?></span></span>
        </td>
		<td>mmHg</td>
		</tr>
		<tr>
		<td>5</td>
		<td>
		<span class="e_" numero="<?php echo $Numero;?>" celula="_sistolica_5"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_sistolica_5];?></span></span>
        </td>
		<td>mmHg</td>
		<td>
		<span class="e_" numero="<?php echo $Numero;?>" celula="_diastolica_5"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_diastolica_5];?></span></span>
        </td>
		<td>mmHg</td>
		<td>
		<span class="e_" numero="<?php echo $Numero;?>" celula="_media_5"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_media_5];?></span></span>
        </td>
		<td>mmHg</td>
		</tr>
	</tbody>
	
	</table>
	
	<label class="mensagem">
	
	<strong>Interpreta&ccedil;&atilde;o:</strong>
	
	<span class="ed_" numero="<?php echo $Numero;?>" celula="_interpretacao"><span class="ed_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo nl2br($Exame[_interpretacao]);?></span></span>
	
	</label>
	
	<label class="linha"></label>
	
</fieldset>


</body>

</html>