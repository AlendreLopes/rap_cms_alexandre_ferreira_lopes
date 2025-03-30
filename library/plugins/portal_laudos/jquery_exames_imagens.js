$(document).ready(function(){
	
	$("#erros").hide();
	
	function Validar(formData,jqForm,options)
	{
		var checkBox = $('#c_0').attr('checked');
		
		var Status = "";
		
		if(checkBox == false)
		{
			Status += "<li>Insira uma imagem</li> ";
		}
		if(Status != "")
		{
			$("#erros ul").empty();
			$("#erros")   .fadeIn("slow");
			$("#erros ul").append(Status);
			return false;
		}
	}
	
	var visualizar = $("#cadastrado").attr("visualizar");
	
	// Callback do retorno do Ajax;
	function Resultado(responseXML)
	{
		$("#erros").empty().hide();
		
		var imagens = $("imagens",responseXML).text();
		
		if(imagens)
		{
			window.location = visualizar;
		}
		else
		{
			$("#erros").append("Não foi poss&iacute;vel Cadastrar as Imagens!").fadeIn("slow");
		}
	}
	
	var paginaCadastro = $("#formulario").attr("action");
	
	$("#formulario").ajaxForm(
	{
		type        : "POST",
		url         : paginaCadastro,
		beforeSubmit: Validar,
		dataType    : "xml",
		success     : Resultado
	});
	
	$("input[name=cancelar]").live('click',function(){
		window.location = visualizar;
		return false;
	});
	
});

function imagem_adiciona() {

	var novas_imagens = $("#nova_imagem").val();
	
	$("#imagem_campo").append("<li id='l" + novas_imagens + "'><input type='file' name='imagens[]'> &nbsp; <a href='#' onClick='imagem_adiciona(); return false;'>[+]</a> &nbsp; <a href='#' onClick='imagem_remove(\"#l" + novas_imagens + "\"); return false;'>[-]</a></li>");
	
	novas_imagens = (novas_imagens - 1) + 2;
	
	$("#nova_imagem").val(novas_imagens);
}

function imagem_remove(id) {
	$(id).remove();
}
