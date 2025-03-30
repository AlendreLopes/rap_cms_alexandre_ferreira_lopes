$(document).ready(function(){
	
	var Indice = $("#indice").attr("indice");
	
	// $("#index_menu").empty();
	
	// $("#index_menu").load("/application/controller/filters/indexMenuExames.php",{indice:Indice});
	
	// Cancela o Cadastro de Exames
	$("#cancelar_cadastro").live('click',function(){
		window.location = "/";
		return false;
	});
	// Cancela o Cadastro do Exame selecionado
	$("#cancelar_formulario").live('click',function(){
		window.location = "/cadastrar/" + Indice + "/";
		return false;
	});
	
});
