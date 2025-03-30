<?php

$Exames  = $SQL -> Consultar("SELECT * FROM protocolos, laudos_ml_e_endocrinologia WHERE protocolo_id = '$indice' AND _laudo = '$indice'");

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

$Otimizar = $SQL -> Atualizar("OPTIMIZE TABLE protocolos, laudos_ml_e_endocrinologia");

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
			
			var t_t   = "laudos_ml_e_endocrinologia";
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
	
	<legend align="center">Laudo Endocrinologia</legend>
	
	<span id="_id" indice="<?php echo $Exame[_id];?>"></span>
	
	<label>
	
    <strong>ACTH</strong> <span class="e_" numero="<?php echo $Numero;?>" celula="_acth"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_acth];?></span></span>
	
</label>
	<!--
	<label class="linha">
	
    Cortisol Resultado
    
	<span class="e_" numero="<?php //echo $Numero;?>" celula="_cortisol"><span class="e_<?php //echo $Numero;?>"><?php //echo $Exame[_cortisol];?></span></span>

	</label>

	<label>

    Cortisol 2

	<span class="e_" numero="<?php //echo $Numero;?>" celula="_cortisol_2"><span class="e_<?php //echo $Numero;?>"><?php //echo $Exame[_cortisol_2];?></span></span>

	</label>

	<label>

    Cortisol 3

	<span class="e_" numero="<?php //echo $Numero;?>" celula="_cortisol_3"><span class="e_<?php //echo $Numero;?>"><?php //echo $Exame[_cortisol_3];?></span></span>

	</label>

	<label class="mensagem">

    Cortisol Observa&ccedil;&atilde;o

	<span class="ed_" numero="<?php //echo $Numero;?>" celula="_cortisol_observacao"><span class="ed_<?php //echo $Numero;?>"><?php  //echo nl2br($Exame[_cortisol_observacao]);?></span></span>

	</label>
	-->
	<label class="linha">

    <strong>Estradiol</strong> <span class="e_" numero="<?php echo $Numero;?>" celula="_estradiol"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_estradiol];?></span></span>

</label>

	<label>
	
    <strong>Insulina</strong> <span class="e_" numero="<?php echo $Numero;?>" celula="_insulina"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_insulina];?></span></span>
	
    </label>
	
    <!--
    
	<label>
	
    <strong>Rela&ccedil;&atilde;o Insulina : Glicose</strong> <span class="e_" numero="<?php // echo $Numero;?>" celula="_insulina_glicose"><span class="e_<?php // echo $Numero;?>" <?php // $Numero ++;?>><?php // echo $Exame[_insulina_glicose];?></span></span>
	
    </label>
	
    -->
    
	<label class="linha">
	
    <strong>Progesterona</strong> <span class="e_" numero="<?php echo $Numero;?>" celula="_progesterona"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_progesterona];?></span></span>
	
</label>
	
	<label class="linha">
	
    <strong>T3</strong> <span class="e_" numero="<?php echo $Numero;?>" celula="_t3"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_t3];?></span></span>
	
</label>
	
    <!--
    
	<label class="linha">
	
    <strong>T4 Di&aacute;lise</strong> <span class="e_" numero="<?php // echo $Numero;?>" celula="_t4_dialise"><span class="e_<?php // echo $Numero;?>" <?php // $Numero ++;?>><?php // echo $Exame[_t4_dialise];?></span></span>
	
    </label>
	
    -->
    
	<label>
	
    <strong>T4 Livre</strong> <span class="e_" numero="<?php echo $Numero;?>" celula="_t4_livre"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_t4_livre];?></span></span>
	
</label>
	
	<label>
	
    <strong>T4 Total</strong> <span class="e_" numero="<?php echo $Numero;?>" celula="_t4_total"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_t4_total];?></span></span>
	
</label>
	
    <label class="linha">
	
    <strong>Testosterona</strong> <span class="e_" numero="<?php echo $Numero;?>" celula="_testosterona"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_testosterona];?></span></span>
	
</label>
	
    <label class="linha">
	
    <strong>TSH</strong> <span class="e_" numero="<?php echo $Numero;?>" celula="_tsh"><span class="e_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_tsh];?></span></span>
	
</label>
	
    <label class="mensagem">
    
	<strong>Observa&ccedil;&atilde;o</strong>
    
	<span class="ed_" numero="<?php echo $Numero;?>" celula="_observacao"><span class="ed_<?php echo $Numero;?>" <?php $Numero ++;?>><?php echo $Exame[_observacao];?></span></span>
	
    </label>
	
	<label class="linha"></label>
	
</fieldset>


</body>

</html>