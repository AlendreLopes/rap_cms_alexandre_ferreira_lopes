//
// JavaScript para o Sistema de Laudos do Pet Imagem
// # Autor Alexandre Lopes - Guache WD
// # <alexandre_lopes@guachewd.com>
//
$(document).ready(function(){
	
	$("#resultado").hide();
	
	var height = $(document).height();
	
	$("#carregando").hide();
	
	$("#carregando").ajaxStart(function(){$(this).css({"height":height}).show();});
	
	$("#carregando").ajaxStop(function(){$(this).hide();});
	
	$(".menuv li.submenu, .menuh li.subv").each(function(){
		var el = $('#' + $(this).attr('id') + ' ul:eq(0)');
		$(this).hover(function(){el.show();}, function(){el.hide();});
	});
	
	$("a[href=menu]").live('click', function(){return false;});
	
	$("a[href=excluir]").live('click', function()
	{
		var excluir= confirm(" - Ação Excluir!\n - - Confirmar!");
		var t_t    = $(this).attr("t_t");
		var c_t    = $(this).attr("c_t");
		var c_t_v  = $(this).attr("c_t_v");
		var c_i    = $(this).attr("c_i");
		var c_i_v  = $(this).attr("c_i_v");
		if(excluir == true)
		{
			$.post("/application/controller/plugins/indexEditar.php",{t_t:t_t,c_t:c_t,c_t_v:c_t_v,c_i:c_i,c_i_v:c_i_v},function(data){
				$("tbody").prepend("<tr><td colspan=\"7\" align=\"center\"><font color=\"#FF0000\"><strong>" + data + "</strong></font></td></tr>");
			});
		}
		return false;
	});
	
	$("a[href=excluir_imagem]").live('click', function()
	{
		var excluir= confirm(" - Excluir Imagem!\n - - Confirmar!");
		var c_t    = "excluir_imagem";
		var c_i_v  = $(this).attr("c_i_v");
		if(excluir == true)
		{
			$.post("/application/controller/plugins/indexEditar.php",{c_t:c_t,c_i_v:c_i_v},function(data){
				$("#resultado").show();
				$("#resultado").html("" + data + "");
			});
		}
		return false;
	});
	
	$("a[href=voltar]").live('click',function(){
		window.location = "/";
		return false;
	});
	
	// Pesquisa para Cadastro de Laudos
	$("#protocolos").FormValidate(
		{
			// divTarget :"#protocolos_",
			divTarget :"#texto",
			phpFile   :"/application/controller/plugins/indexPesquisaProtocolos.php",
			ajax      :true,
			validCheck:false
		}
	);
	
	// Alterar dinamicamente o tamanho da mascara para pesquisa dos Protocolos
	var mascara = $("input[name=mascara]").val();
	
	$("input[name=protocolos]").mask("" + mascara + "");
	
});