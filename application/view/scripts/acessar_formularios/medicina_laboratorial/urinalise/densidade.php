<!DOCTYPE html>

<html>

<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	
	<title>Densidade</title>
	
	<script type="text/javascript" src="/library/plugins/form/jquery_form.js"></script>
	
	<script type="text/javascript" src="/library/plugins/validation/jquery_validate.js"></script>
	
	<script type="text/javascript">
	$(document).ready(function(){
		
		$("#resultado").hide();
		
		$("a[href=cadastrado]").live('click',function(){
			var Pastas    = 'medicina_laboratorial';
			var subPastas = 'urinalise';
			var Paginas   = 'densicade';
			$("#index_menu_exames").fadeOut("slow").empty();
			$("#index_menu").fadeIn("slow").load("application/controller/filters/indexMenu.php");
			$.post("application/controller/filters/indexController.php",{pasta:Pastas,subpasta:subPastas,pagina:Paginas},function(data){
					$("#exames_").empty();
					$("#exames_").html(data);
			});
			return false;
		});
		
		function cadastrado(data){
			if(data == 1)
			{
				$(".cadastrar").hide();
				$("#resultado").show();
				$("#resultado").html("Redirecionando<br />Visualização do Laudo");
				var visualizar = $("#cadastrado").attr("visualizar");
				window.location = visualizar;
			}
			else
			{
				$("#resultado").fadeIn("slow");
				$("#resultado").text("Erro ao cadastrar Laudo ou Laudo já cadastrado.");
			}
		}
		$("#formulario").validate({
			submitHandler:function(form)
			{
				$(form).ajaxSubmit({
					dataType:'post',
					success :cadastrado
				});
			}
		});
	});
        
        </script>
	
	<link type="text/css" rel="stylesheet" media="screen" href="/public/styles/sistema_formularios.css" />
	
	<style type="text/css">
		#resultado{ clear:both;}
	</style>
	
</head>

<body>

<?php

$Laudo  = $SQL -> Consultar("SELECT * FROM protocolos, laudos_ml_u_densidade WHERE protocolo_id = '$indice' AND _laudo = '$indice'");

$Laudos = mysql_num_rows($Laudo);

if($Laudos)
{
	$Listar = mysql_fetch_array($Laudo);
	
	?>
	
	<br />
	
	<br />
	
	<fieldset>
	
	<label class="linha">
	
	<strong>
	
		<br />
		
		Protocolo: <?php echo $Listar[_protocolo];?>
		
		<br />
		
		<br />
		
		J&aacute; cadastrado nos Laudos de Densidade.
	
	</strong>
	
	</label>
	
	</fieldset>
	
	<?php
}
else
{	
	?>
	
	<span id="cadastrado" visualizar="<?php echo LMPaginas::Listar($laudo.'_visualizar',$indice);?>"></span>
	
	<fieldset>
<legend>Laudo de Densidade</legend>
	
	<form id="formulario" action="/application/models/medicina_laboratorial/urinalise/densidade_cadastrar.php" method="post">
	
    <input type="hidden" name="laudo" value="<?php echo $indice;?>" />
    
	<label class="linha">
	
	Densidade
	
	<input type="text" name="c_2" />
	
	</label>
    
    <label class="linha"><div id="resultado"></div></label>
	
	<label class="cadastrar">
	
	<input type="button" id="cadastrar" class="linha" value="Cadastrar" />
	&nbsp;&nbsp;
	<input type="button" id="cancelar_formulario" value="Cancelar"  />
	
	</label>
    
	</form>
	
	</fieldset>
	
	<?php
}
?>

</body>

</html>