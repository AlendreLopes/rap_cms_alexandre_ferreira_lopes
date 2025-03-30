<?php

$Exames  = $SQL -> Consultar("SELECT * FROM protocolos, laudos_di_endoscopia WHERE protocolo_id = '$indice' AND _laudo = '$indice'");

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

$Otimizar = $SQL -> Atualizar("OPTIMIZE TABLE protocolos, laudos_di_endoscopia");

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
					loadurl    :'application/controller/filters/indexEditListClinics.php',
					type       :'select',
					submit     :'Editar',
					cancel     :'Cancelar',
					width      :100,
					submitdata :{t_t:t_t_l,c_i:c_i_l,c_i_v:c_i_v_l,c_t:"_clinica_titulo"}
				}
			);
			
			var t_t   = "laudos_di_endoscopia";
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
			
			$(".ei_").live('click',function(){
				var numero = $(this).attr("numero");
				$(".ei_" + numero).editable("/application/controller/plugins/indexEditar.php",
					{
						indicator  :'Salvando',
						type       :'textarea',
						width      :285,
						height     :150,
						submit     :'Salvar',
						cancel     :'Cancelar',
						submitdata :{t_t:'tb_imagens',c_i:'imagem_id',c_i_v:numero,c_t:"imagem_texto"}
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
	
	<legend align="center">Laudo Endoscopia</legend>
	
	<span id="_id" indice="<?php echo $Exame[_id];?>"></span>
	
	<label>
	
	<strong>Local:</strong>
	
    <span class="e_" numero="<?php echo $Numero;?>" celula="_local"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_local];?></span></span>
	
	</label>
	
	<label class="mensagem">
	
	<strong>Coment&aacute;rio:</strong>
	
    <span class="ed_" numero="<?php echo $Numero;?>" celula="_comentario"><span class="ed_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo nl2br($Exame[_comentario]);?></span></span>
	
	</label>
	
	<label class="mensagem">
	
	<strong>Interpreta&ccedil;&atilde;o:</strong>
	
	<span class="ed_" numero="<?php echo $Numero;?>" celula="_interpretacao"><span class="ed_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo nl2br($Exame[_interpretacao]);?></span></span>
	
	</label>
	
	<label class="mensagem">
	
	<strong>Conclus&atilde;o:</strong>
	
	<span class="ed_" numero="<?php echo $Numero;?>" celula="_conclusao"><span class="ed_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo nl2br($Exame[_conclusao]);?></span></span>
	
	</label>
	
	<br clear="all" />
	
    <label class="linha">
    
	<div id="resultado"></div>
	
	<div id="img_listar">
	
	<?php
		
		$imagem = $SQL -> Consultar("SELECT * FROM tb_imagens WHERE imagem_endoscopia = '$Exame[_id]' ORDER BY imagem_id ASC");
		
		$retorno = mysql_num_rows($imagem);
		
        if($retorno)
        {
			echo "<label class=\"linha_img\">\n";
			
			echo "<a href=\"".LMPaginas::Imagem('endoscopia_imagens',$Exame[protocolo_id],$Exame[_id])."\" title=\"Imagens\">Adicionar Imagens</a>";
			
			echo "</label>\n";
			
			while($imagens = mysql_fetch_array($imagem))
            {
				echo "<div id=\"img_agrupar\">\n";
				
				echo "<a href=\"".LMPaginas::Imagem('endoscopia_imagem_editar',$Exame[protocolo_id],$imagens[imagem_id])."\" id=\"T\" title=\"Trocar Imagem\">Trocar</a>";
				
				echo "<a href=\"excluir_imagem\" id=\"E\" c_i_v=\"{$imagens[imagem_id]}\" title=\"Excluir Imagem\">Excluir</a>";
				
				echo "<img src=\"/public/images_e/{$imagens[imagem_imagem]}\" />";
				
				echo "<div class=\"ei_\" numero=\"$imagens[imagem_id]\">\n";
				
				echo "<span class=\"ei_$imagens[imagem_id]\">".nl2br($imagens[imagem_texto])."</span>\n";
				
				echo "</div>\n";
				
				echo "</div>\n";
				
				$n_ ++;
            }
        }
        else
        {
			echo "<label class=\"linha_img\">\n";
			
			echo "<a href=\"".LMPaginas::Imagem('endoscopia_imagens',$Exame[protocolo_id],$Exame[_id])."\" title=\"Imagens\">Cadastrar Imagens</a>";
           
            echo "</label>\n";
        }
        
		mysql_free_result($imagem);
		
	?>
	
	</div>
	
	</label>
	
	<label class="linha"></label>
	
</fieldset>

</body>

</html>