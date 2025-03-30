<?php
	
	$indice = $_GET['indices'];
	$i      = $SQL -> Consultar("SELECT * FROM tb_imagens WHERE imagem_id = '$indice'");
	$is     = mysql_fetch_array($i);
	
?>
<!DOCTYPE html>

<html>

<head>
	
	<title>Imagens para Exame</title>
	
	<link type="text/css" href="/public/styles/sistema_formularios.css" rel="stylesheet" media="screen" />
	
    <link type="text/css" href="/public/styles/sistema_swfuploader.css" rel="stylesheet" media="screen" />
    
	<script type="text/javascript" src="/library/plugins/swfuploader/swfupload.js"></script>
	
	<script type="text/javascript" src="/library/plugins/swfuploader/swfupload.queue.js"></script>
	
	<script type="text/javascript" src="/library/plugins/swfuploader/fileprogress.js"></script>
	
	<script type="text/javascript" src="/library/plugins/swfuploader/handlers.js"></script>
			
	<script type="text/javascript">
		$(document).ready(function(){
			
			$("#cadastrado").hide();
			
			var laudo  = $("input[name=laudo]").val();
			var indice = $("input[name=indice]").val();
			var cookie = $("input[name=cookie]").val();
			
			var swfu;
					
			window.onload = function() {
				var settings = {
					flash_url              : "/library/plugins/swfuploader/swfupload.swf",
					file_post_name         : "imagem",
					upload_url             : "http://reports.petimagem.com.br/application/models/imagens_cadastrar_editada.php",
					post_params            : {"laudo" : "" + laudo + "","indice" : "" + indice + "","cookie" : "" + cookie + ""},
					file_size_limit        : "10 MB",
					file_types             : "*.jpg",
					file_types_description : "JPG Imagem",
					file_upload_limit      : 1,
					file_queue_limit       : 0,
					custom_settings : {
						progressTarget : "fsUploadProgress",
						cancelButtonId : "btnCancel"
					},
					
					debug: false,
					
					// Button settings
					button_image_url        : "/public/image/images_swfuploader/icon-add.png",
					button_width            : "150",
					button_height           : "30",
					button_placeholder_id   : "spanButtonPlaceHolder",
					button_text             : '<span class="theFont">Selecionar Imagem</span>',
					button_text_style       : ".theFont { font-size: 16; }",
					button_text_left_padding: 12,
					button_text_top_padding : 3,
					
					// The event handler functions are defined in handlers.js
					file_queued_handler          : fileQueued,
					file_queue_error_handler     : fileQueueError,
					file_dialog_complete_handler : fileDialogComplete,
					upload_start_handler         : uploadStart,
					upload_progress_handler      : uploadProgress,
					upload_error_handler         : uploadError,
					upload_success_handler       : uploadSuccess,
					upload_complete_handler      : uploadComplete,
					queue_complete_handler       : queueComplete	// Queue plugin event
				};
				swfu = new SWFUpload(settings);
			};
		});
        
        </script>
	
	<style type="text/css">
	#cadastrado, #cancelar{
		float      :left;
		width      :200px;
		margin-left:5px;
		color      :#003300;
		font-weight:bold;
		text-align :center;
		background :#EEEEEE;
		border     :1px dotted #abdfbf;
	}
	#cancelar{
		float:right; !important
	}
	#img_editar{
		margin      :0 auto;
		width       :290px;
		height      :220px;
		border      :1px solid #000;
	}
	#img_editar img{
		padding: 3px 2px 3px 3px;
	}
	</style>
	
</head>

<body>

<fieldset>

<legend>Editar Imagem</legend>

<div id="img_editar">
	
	<?php echo "<img src=\"/public/images_e/{$is[imagem_imagem]}\" />";?>
	
</div>
	
<br clear="all" />

<label class="linha">

<div id="content">

<span class="legend">Tamanho m&aacute;ximo da Imagem: 10 MB</span>

<form id="form1" action="http://reports.petimagem.com.br/application/models/imagens_cadastrar_editada.php" method="post" enctype="multipart/form-data">
	
	<div class="fieldset flash" id="fsUploadProgress">
		<span class="legend">Transferência</span>
	</div>
	
	<div id="divStatus">0 Imagens Transferidas</div>
	
	<br />
	
	<div id="divStatused">
		<span id="spanButtonPlaceHolder" style="background:#ccc;"></span>
		<input id="btnCancel" type="button" value="Cancelar Transferências" onclick="swfu.cancelQueue();" disabled="disabled" style="margin-left: 2px; font-size: 8pt; height: 29px;" />
	</div>
	
	<input type="hidden" name="laudo"  value="<?php echo str_replace('_imagem_editar','',$pagina);?>" />
	
	<input type="hidden" name="indice" value="<?php echo $indices;?>" />
	
	<input type="hidden" name="cookie" value="<?php echo $_COOKIE['sl_hash'];?>" />
	
</form>

</div>

<div id="cadastrado">
	[ <a href="<?php echo LMPaginas::Listar(str_replace('_imagem_editar','',$pagina).'_visualizar',$imagem);?>" title="Visualizar Laudo">Edi&ccedil;&atilde;o Concluida</a> ]
</div>

<div id="cancelar">
	[ <a href="<?php echo LMPaginas::Listar(str_replace('_imagem_editar','',$pagina).'_visualizar',$imagem);?>" title="Visualizar Laudo">Cancelar Edi&ccedil;&atilde;o</a> ]
</div>


</label>

<label class="linha"></label>


</fieldset>

</body>

</html>