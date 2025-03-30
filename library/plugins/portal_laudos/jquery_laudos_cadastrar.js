 jQuery.fn.preventDoubleSubmit = function() {

	jQuery(this).submit(function() {
	    if (this.beenSubmitted)
			return false;
	    else
			this.beenSubmitted = true;
  });
};
$(document).ready(function(){
	
	jQuery('form').preventDoubleSubmit();

	$("#resultado").hide();
	
	function cadastrado(data)
	{
		if(data == 1)
		{
			$(".cadastrar").hide();
			$("#resultado").show();
			// $("#resultado").html("Redirecionando<br />Visualiza&ccedil;&atilde;o do Laudo");
			var visualizar = $("#cadastrado").attr("visualizar");
			// window.location = visualizar;
			$("#resultado").html("<a href=\"" + visualizar + "\" title=\"Visualizar Laudo?\">Laudo cadastrado com sucesso</a>");
		}
		else
		{
			$("#resultado").fadeIn("slow");
			$("#resultado").html("Erro ao cadastrar Laudo ou Laudo j&aacute; cadastrado.");
		}
	}

	$("#formulario").submit( function(event) {
		event.preventDefault();
		//return false;
	});
	$("#cadastrar").click(function(event) {
		$(this).hide();
        $("#formulario").ajaxSubmit({
			dataType:'post',
			success :cadastrado
		});
	});

});