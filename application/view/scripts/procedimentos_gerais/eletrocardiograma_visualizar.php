<?php

$Exames  = $SQL -> Consultar("SELECT * FROM protocolos, laudos_sc_eletrocardiograma WHERE protocolo_id = '$indice' AND _laudo = '$indice'");

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

$Otimizar = $SQL -> Atualizar("OPTIMIZE TABLE laudos_sc_eletrocardiograma");

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
			
			var t_t   = "laudos_sc_eletrocardiograma";
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
	
	<legend align="center">Laudo Eletrocardiograma</legend>
	
	<span id="_id" indice="<?php echo $Exame[_id];?>"></span>
    
	<table class="tablesorter" cellspacing="1">
		
        <tbody>
            <tr>
            <td colspan="6">Frequ&ecirc;ncia Card&iacute;aca</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td width="20%">Batimento</td>
            <td width="20%">
            <span class="e_" numero="3" celula="_batimento"><span class="e_3"><?php echo $Exame[_batimento];?></span></span>
            </td>
            <td width="20%">bat/min</td>
            <td width="20%">&nbsp;</td>
            <td>&nbsp;</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Ritmo</td>
            <td>
            <span class="e_" numero="4" celula="_ritmo"><span class="e_4"><?php echo $Exame[_ritmo];?></span></span>
            </td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Eixo</td>
            <td>
            <span class="e_" numero="5" celula="_eixo"><span class="e_5"><?php echo $Exame[_eixo];?></span></span>
            </td>
            <td>&deg;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>
            <tr>
            <td colspan="6">Leitura DII</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Onda P</td>
            <td>
            <span class="e_" numero="6" celula="_ondap"><span class="e_6"><?php echo $Exame[_ondap];?></span></span>
            </td>
            <td>mV</td>
            <td>
            <span class="e_" numero="7" celula="_ondap_s"><span class="e_7"><?php echo $Exame[_ondap_s];?></span></span>
            </td>
            <td>S</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Onda PR</td>
            <td>
            <span class="e_" numero="8" celula="_pr"><span class="e_8"><?php echo $Exame[_pr];?></span></span>
            </td>
            <td>s</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Onda QRS</td>
            <td>
            <span class="e_" numero="9" celula="_qrs"><span class="e_9"><?php echo $Exame[_qrs];?></span></span>
            </td>
            <td>s</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Onda R</td>
            <td>
            <span class="e_" numero="10" celula="_r"><span class="e_10"><?php echo $Exame[_r];?></span></span>
            </td>
            <td>mV</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Onda ST</td>
            <td>
            <span class="e_" numero="11" celula="_st"><span class="e_11"><?php echo $Exame[_st];?></span></span>
            </td>
            <td>mV</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Onda T</td>
            <td>
            <span class="e_" numero="12" celula="_t"><span class="e_12"><?php echo $Exame[_t];?></span></span>
            </td>
            <td>mV</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>Onda QT</td>
            <td>
            <span class="e_" numero="13" celula="_qt"><span class="e_13"><?php echo $Exame[_qt];?></span></span>
            </td>
            <td>s</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>
        </tbody>
	</table>
    
    <label class="mensagem">
    
    <strong>Outros</strong>
    
    <span class="ed_" numero="14" celula="_outros"><span class="ed_14"><?php echo nl2br($Exame[_outros]);?></span></span>
	
    </label>
    
    <label class="mensagem">
	
    <strong>Interpreta&ccedil;&atilde;o</strong>
    
    <span class="ed_" numero="15" celula="_interpretacao"><span class="ed_15"><?php echo nl2br($Exame[_interpretacao]);?></span></span>
	
    </label>
    
	<label class="linha"></label>
	
</fieldset>

</body>

</html>