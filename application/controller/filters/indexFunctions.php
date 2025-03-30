<?php
class Functions
{
	// Funçção que Gera uma String para Evitar que robos enviem E-mail automaticamente
	public function to_genarate(): string
	{
		$consonant     = 'bcdfghjklmnpqrstvywxz';
		$number        = '123456789';
		$vowel         = 'aeiou';
		$genarate      = '';
		$new_consonant = strlen($consonant)-1;
		$new_number    = strlen($number)   -1;
		$new_vowel     = strlen($vowel)    -1;
		for($n = 0; $n <= 1; $n++){
			$random_consonant = rand(0,$new_consonant);
			$random_numero    = rand(0,$new_number);
			$random_vogal     = rand(0,$new_vowel);
			$string_consonant = substr($consonant,$random_consonant,1);
			$string_numero    = substr($number,   $random_numero,   1);
			$string_vogal     = substr($vowel,    $random_vogal,    1);
			$genarate        .= $string_consonant.$string_numero.$string_vogal;
		}
		return $genarate;
	}
	
	// Fun��o de Cortar Frases sem cortar Palavras
	public function news($texts): string
	{
		// $Espacos = strrpos($texts," ", (strlen($texts) -20));
		return $text = substr($texts,0,20).'...';
	}
	public function texts($texts): string
	{
		// $Espacos = strrpos($texts," ", (strlen($texts) -100));
		return $text = substr($texts,0,100).'...';
	}
	
	// Gera um Nome único para a imagem
	// Verifica se o arquivo já existe, caso positivo, chama essa fun��o novamente
	public function image_title($extantion): mixed
	{
		$new_title = substr(md5(uniqid(time())), 0, 10);
		
		$image_title  = $new_title.".".$extantion;
		
		if(file_exists("/public/images/". $image_title)
		{
			$image_title($extantion);
		}
		return $image_title
	
	// Functions::reduz_imagem($image_Temp,800,600,$imageNameal)
	public function reduz_imagem($img, $max_x, $max_y, $nome_foto)
	{
		//pega o tamanho da imagem ($original_x, $original_y)
		@list($width, $height) = @getimagesize($img);
		
		$original_x = $width;
		$original_y = $height;
		
		// se a largura for maior que altura
		if($original_x > $original_y)
		{
		   $porcentagem = (100 * $max_x) / $original_x;
		} 
		else
		{
		   $porcentagem = (100 * $max_y) / $original_y;   
		}
		
		$tamanho_x = $original_x * ($porcentagem / 100);
		$tamanho_y = $original_y * ($porcentagem / 100);
		
		$image_p = @imagecreatetruecolor($tamanho_x, $tamanho_y);
		
		$image   = @imagecreatefromjpeg($img);
		
		@imagecopyresampled($image_p, $image, 0, 0, 0, 0, $tamanho_x, $tamanho_y, $width, $height);
		
		return @imagejpeg($image_p, $nome_foto, 100);
	}
	// Fun��o para Cofigurar uma Data futura, usada para disponibilizar
	// os Resultados por um per�odo de 30 dias...
	public function nova_data($Data, $Dia, $Mes, $Ano)
	{
		// Passar a Data no Formato (dd/mm/YYYY)
		$Data = explode("-", $Data);
		$Nova_Data = date("Y-m-d",mktime(0,0,0,$Data[1] + $Mes, $Data[2] + $Dia, $Data[0] + $Ano));
		return $Nova_Data;
	}
	
	// Fun��o Data
	public function retorna_data($unset,$set,$data)
	{
		$data_unset = explode($unset,$data);
		$data_set   = implode($set,array_reverse($data_unset));
		return        $data_set;
	}
	
	// Dia da Semana
	public function dia_da_semana(){
		$dia_da_semana = date('w');
		switch($dia_da_semana)
		{
			case '0': $dia = 'domingo';       break;
			case '1': $dia = 'segunda-feira'; break;
			case '2': $dia = 'ter�a-feira';   break;
			case '3': $dia = 'quarta-feira';  break;
			case '4': $dia = 'quinta-feira';  break;
			case '5': $dia = 'sexta-feira';   break;
			case '6': $dia = 's�bado';        break;
		}
		return $dia;
	}
	
	// M�s do Ano
	public function retorna_mes($m){
		switch($m)
		{
			case '1':  $mes = 'Janeiro';   break;
			case '2':  $mes = 'Fevereiro'; break;
			case '3':  $mes = 'Mar�o';     break;
			case '4':  $mes = 'Abril';     break;
			case '5':  $mes = 'Maio';      break;
			case '6':  $mes = 'Junho';     break;
			case '7':  $mes = 'Julho';     break;
			case '8':  $mes = 'Agosto';    break;
			case '9':  $mes = 'Setembro';  break;
			case '10': $mes = 'Outubro';   break;
			case '11': $mes = 'Novembro';  break;
			case '12': $mes = 'Dezembro';  break;
		}
		return  $mes;
	}
	
	public function mes_do_ano($Menos){
		if(date('n') == 1)
		{
			echo Functions::retorna_mes(12);
		}
		else
		{
			$mes = date('n') - $Menos;
			echo Functions::retorna_mes($mes);
		}
	}
	
	// Retorna o Ano
	public function retorna_ano(){
		
		echo (date('n') == 1) ? date("Y") - 1 : date("Y");
		
	}
}
?>