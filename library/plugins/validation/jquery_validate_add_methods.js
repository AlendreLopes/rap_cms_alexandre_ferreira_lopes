// Métodos Adicionais CPF, CNPJ E Formato da Data Brasileira
// Função adaptada do Blog do Shiguenori Suguiura Junior <junior@dothcom.net>
// http://blog.shiguenori.com/2009/05/29/validar-CPF-CNPJ-com-jquery-validate/
// Aterado

jQuery.validator.addMethod("CPF", function(value, element) {
	value = value.replace('.','');
	value = value.replace('.','');
	CPF   = value.replace('-','');
	while(CPF.length < 11) CPF = "0" + CPF;
	var expReg = /^0+$|^1+$|^2+$|^3+$|^4+$|^5+$|^6+$|^7+$|^8+$|^9+$/;
	var a = [];
	var b = new Number;
	var c = 11;
	for (i = 0; i < 11; i ++){
		a[i] = CPF.charAt(i);
		if (i < 9) b += (a[i] * --c);
	}
	if ((x = b % 11) < 2) { a[9] = 0 } else { a[9] = 11-x }
	b = 0;
	c = 11;
	for (y = 0; y < 10; y ++) b += (a[y] * c--);
	if ((x = b % 11) < 2) { a[10] = 0; } else { a[10] = 11-x; }
	if ((CPF.charAt(9) != a[9]) || (CPF.charAt(10) != a[10]) || CPF.match(expReg)) return false;
	return true;
}, "CPF inv&aacute;lido.");// Mensagem padrão 

jQuery.validator.addMethod("DataBR", function(value, element) {
	 //contando chars
	if(value.length != 10) return false;
	// verificando data
	var data 		= value;
	var dia 		= data.substr(0,2);
	var barra1		= data.substr(2,1);
	var mes 		= data.substr(3,2);
	var barra2		= data.substr(5,1);
	var ano 		= data.substr(6,4);
	if(data.length != 10 || barra1 != "/" || barra2 != "/" || isNaN(dia) || isNaN(mes) || isNaN(ano) || dia > 31 || mes > 12) return false;
	if((mes ==4 || mes == 6|| mes == 9 || mes == 11) && dia == 31) return false;
	if(mes ==2  &&  (dia>29||(dia == 29 && ano % 4 != 0))) return false;
	if(ano < 1900) return false;
	return true;
}, "Data inv&aacute;lida");// Mensagem padrão 

jQuery.validator.addMethod("DataHoraBR", function(value, element) {
	 //contando chars
	if(value.length!=16) return false;
	 // dividindo data e hora
	if(value.substr(10,1) != ' ') return false; // verificando se há espaço
	var arrOpcoes = value.split(' ');
	if(arrOpcoes.length != 2) return false; // verificando a divisão de data e hora
	// verificando data
	var data 		= arrOpcoes[0];
	var dia 		= data.substr(0,2);
	var barra1		= data.substr(2,1);
	var mes 		= data.substr(3,2);
	var barra2		= data.substr(5,1);
	var ano 		= data.substr(6,4);
	if(data.length != 10 || barra1 != "/" || barra2 != "/" || isNaN(dia) || isNaN(mes) || isNaN(ano) || dia > 31 || mes > 12) return false;
	if ((mes == 4 || mes == 6 || mes == 9 || mes == 11) && dia == 31) return false;
	if (mes == 2  &&  (dia > 29 || (dia == 29 && ano % 4 != 0))) return false;
	// verificando hora
	var horario 	= arrOpcoes[1];
	var	hora 		= horario.substr(0,2);
	var doispontos 	= horario.substr(2,1);
	var minuto 		= horario.substr(3,2);
	if(horario.length != 5 || isNaN(hora) || isNaN(minuto) || hora > 23 || minuto > 59 || doispontos != ":") return false;
	return true;
}, "Data e Hora inv&aacute;lida");	

/*
 *
 * NOVO METODO PARA O JQUERY VALIDATE
 * VALIDA CNPJ COM 14 OU 15 DIGITOS
 * A VALIDAÇÃO É FEITA COM OU SEM OS CARACTERES SEPARADORES, PONTO, HIFEN, BARRA
 *
 * ESTE MÉTODO FOI ADAPTADO POR:
 * 
 * Shiguenori Suguiura Junior <junior@dothcom.net>
 * 
 * http://blog.shiguenori.com
 * http://www.dothcom.net
 * 
 */
jQuery.validator.addMethod("CNPJ", function(CNPJ, element) {
   // DEIXA APENAS OS NÚMEROS
   CNPJ = CNPJ.replace('/','');
   CNPJ = CNPJ.replace('.','');
   CNPJ = CNPJ.replace('.','');
   CNPJ = CNPJ.replace('-','');

   var numeros, digitos, soma, i, resultado, pos, tamanho, digitos_iguais;
   digitos_iguais = 1;

   if (CNPJ.length < 14 && CNPJ.length < 15){
      return false;
   }
   for (i = 0; i < CNPJ.length - 1; i++){
      if (CNPJ.charAt(i) != CNPJ.charAt(i + 1)){
         digitos_iguais = 0;
         break;
      }
   }

   if (!digitos_iguais){
      tamanho = CNPJ.length - 2
      numeros = CNPJ.substring(0,tamanho);
      digitos = CNPJ.substring(tamanho);
      soma = 0;
      pos = tamanho - 7;

      for (i = tamanho; i >= 1; i--){
         soma += numeros.charAt(tamanho - i) * pos--;
         if (pos < 2){
            pos = 9;
         }
      }
      resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
      if (resultado != digitos.charAt(0)){
         return false;
      }
      tamanho = tamanho + 1;
      numeros = CNPJ.substring(0,tamanho);
      soma    = 0;
      pos     = tamanho - 7;
      for (i = tamanho; i >= 1; i --){
         soma += numeros.charAt(tamanho - i) * pos--;
         if (pos < 2){
            pos = 9;
         }
      }
      resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
      if (resultado != digitos.charAt(1)){
         return false;
      }
      return true;
   }
   else
   {
      return false;
   }
}, "CNPJ inv&aacute;lido."); // Mensagem padrão 

jQuery.validator.addMethod("Diferente", function(value, element, param) {
   return value == $(param).val() ? false : true;
}, "Este valor não pode ser igual"); // Mensagem padrão 

jQuery.validator.addMethod("minIdade", function(value, element, params) {
	return this.optional(element) || value > params;
}, "Voc&ecirc; precisa ter mais de 18 anos.");

jQuery.validator.addMethod("maxWords", function(value, element, params) {
    return this.optional(element) || value.match(/\b\w+\b/g).length < params;
}, $.format("Please enter {0} words or less."));

jQuery.validator.addMethod("minWords", function(value, element, params) {
    return this.optional(element) || value.match(/\b\w+\b/g).length >= params;
}, $.format("Please enter at least {0} words."));

jQuery.validator.addMethod("rangeWords", function(value, element, params) {
    return this.optional(element) || value.match(/\b\w+\b/g).length >= params[0] && value.match(/bw+b/g).length < params[1];
}, $.format("Please enter between {0} and {1} words."));

jQuery.validator.addMethod("CNS", function(CNS, element){
	// Formulário que contem o campo CNS
	var soma      = new Number;
    var resto     = new Number;
	var dv        = new Number;
    var pis       = new String;
    var resultado = new String;
	var tamCNS    = CNS.length;
	if((tamCNS) != 15)
	{
		// alert("Numero de CNS invalido");
		return false;
	}
	pis  = CNS.substring(0,11);
	soma = (((Number(pis.substring(0,1))) * 15) + ((Number(pis.substring(1,2))) * 14) + ((Number(pis.substring(2,3))) * 13) + ((Number(pis.substring(3,4))) * 12) + ((Number(pis.substring(4,5))) * 11) + ((Number(pis.substring(5,6))) * 10) + ((Number(pis.substring(6,7))) * 9) + ((Number(pis.substring(7,8))) * 8) + ((Number(pis.substring(8,9))) * 7) + ((Number(pis.substring(9,10))) * 6) + ((Number(pis.substring(10,11)))* 5));
	resto = soma % 11;
    dv    = 11 - resto;
	if(dv == 11)
	{
		dv = 0;
    }

	if(dv == 10)
	{
		soma = (((Number(pis.substring(0,1))) * 15) + ((Number(pis.substring(1,2))) * 14) + ((Number(pis.substring(2,3))) * 13) + ((Number(pis.substring(3,4))) * 12) + ((Number(pis.substring(4,5)))  * 11)+((Number(pis.substring(5,6))) * 10) + ((Number(pis.substring(6,7))) * 9) +((Number(pis.substring(7,8))) * 8) + ((Number(pis.substring(8,9))) * 7) + ((Number(pis.substring(9,10))) * 6) + ((Number(pis.substring(10,11))) * 5) + 2);
		
		resto     = soma % 11;
        dv        = 11 - resto;
        resultado = pis + "001" + String(dv);
	}
	else
	{
		resultado = pis + "000" + String(dv);
	}
	
	if(CNS != resultado)
	{
		return false;
    }
	else
	{
		return true;
	}
}, 'CNS inv&aacute;lida.');
