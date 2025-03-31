<!DOCTYPE html>

<html>

<head>

	<title>Imagens para Laudo</title>

	<link type="text/css" href="/public/styles/sistema_formularios.css" rel="stylesheet" media="screen" />

	<link type="text/css" href="/public/styles/sistema_swfuploader.css" rel="stylesheet" media="screen" />

	<script type="text/javascript" src="/library/plugins/swfuploader/swfupload.js"></script>

	<script type="text/javascript" src="/library/plugins/swfuploader/swfupload.queue.js"></script>

	<script type="text/javascript" src="/library/plugins/swfuploader/fileprogress.js"></script>

	<script type="text/javascript" src="/library/plugins/swfuploader/handlers.js"></script>

	<script type="text/javascript">
		$(document).ready(function () {

			$("#cadastrado").hide();

			var laudo = $("input[name=laudo]").val();
			var indice = $("input[name=indice]").val();
			var cookie = $("input[name=cookie]").val();

			var swfu;

			window.onload = function () {
				var settings = {
					flash_url: "/library/plugins/swfuploader/swfupload.swf",
					file_post_name: "imagens",
					upload_url: "http://reports.petimagem.com.br/application/models/imagens_cadastrar.php",
					post_params: { "laudo": "" + laudo + "", "indice": "" + indice + "", "cookie": "" + cookie + "" },
					file_size_limit: "20 MB",
					file_types: "*.jpg",
					file_types_description: "JPG Imagens",
					file_upload_limit: 10,
					file_queue_limit: 0,
					custom_settings: {
						progressTarget: "fsUploadProgress",
						cancelButtonId: "btnCancel"
					},

					debug: false,

					// Button settings
					button_image_url: "/public/image/images_swfuploader/icon-add.png",
					button_width: "150",
					button_height: "30",
					button_placeholder_id: "spanButtonPlaceHolder",
					button_text: '<span class="theFont">Selecionar Imagens</span>',
					button_text_style: ".theFont { font-size: 16; }",
					button_text_left_padding: 12,
					button_text_top_padding: 3,

					// The event handler functions are defined in handlers.js
					file_queued_handler: fileQueued,
					file_queue_error_handler: fileQueueError,
					file_dialog_complete_handler: fileDialogComplete,
					upload_start_handler: uploadStart,
					upload_progress_handler: uploadProgress,
					upload_error_handler: uploadError,
					upload_success_handler: uploadSuccess,
					upload_complete_handler: uploadComplete,
					queue_complete_handler: queueComplete	// Queue plugin event
				};
				swfu = new SWFUpload(settings);
			};
		});

	</script>

	<style type="text/css">
		#cadastrado,
		#cancelar {
			float: left;
			width: 200px;
			margin-left: 5px;
			color: #003300;
			font-weight: bold;
			text-align: center;
			background: #EEEEEE;
			border: 1px dotted #abdfbf;
		}

		#cancelar {
			float: right;
			!important
		}
	</style>

</head>

<body>

	<div id="img_editar">
		<!-- Para evitar bug no Swfupload j� que existe um ordem para esconder este div na edi��o -->
	</div>

	<fieldset>

		<legend>Cadastrar Imagens para o Laudo: <?php echo str_replace('_imagens', '', $pagina); ?></legend>

		<label class="linha">

			<div id="content">

				<span class="legend">Tamanho m&aacute;ximo das Imagens: 20 MB</span>

				<form id="form1" action="http://reports.petimagem.com.br/application/models/imagens_cadastrar.php"
					method="post" enctype="multipart/form-data">

					<div class="fieldset flash" id="fsUploadProgress">
						<span class="legend">Fila de transfer�ncia</span>
					</div>

					<div id="divStatus">0 Imagens Transferidas</div>

					<br />

					<div id="divStatused">
						<span id="spanButtonPlaceHolder" style="background:#ccc;"></span>
						<input id="btnCancel" type="button" value="Cancelar Transfer�ncias"
							onclick="swfu.cancelQueue();" disabled="disabled"
							style="margin-left: 2px; font-size: 8pt; height: 29px;" />
					</div>

					<input type="hidden" name="laudo" value="<?php echo str_replace('_imagens', '', $pagina); ?>" />

					<input type="hidden" name="indice" value="<?php echo $indices; ?>" />

					<input type="hidden" name="cookie" value="<?php echo $_COOKIE['sl_hash']; ?>" />

				</form>

			</div>

			<label class="linha"></label>

			<div id="cadastrado">
				[ <a href="<?php echo LMPaginas::Listar(str_replace('_imagens', '', $pagina) . '_visualizar', $imagem); ?>"
					title="Visualizar Laudo">Cadastro Concluido</a> ]
			</div>

			<div id="cancelar">
				[ <a href="<?php echo LMPaginas::Listar(str_replace('_imagens', '', $pagina) . '_visualizar', $imagem); ?>"
					title="Visualizar Laudo">Cancelar Cadastro</a> ]
			</div>

		</label>

		<label class="linha"></label>

	</fieldset>

</body>

</html>