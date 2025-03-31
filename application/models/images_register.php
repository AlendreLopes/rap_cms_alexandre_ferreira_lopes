<?php

if($_SERVER['REQUEST_METHOD'] == "POST")
{
	
	function __autoload($classe)
	{
		$pastas = array('filters', 'log', 'plugins');
		foreach ($pastas as $pasta)
		{
			if (file_exists("../controller/{$pasta}/index{$classe}.php"))
			{
				include_once "../controller/{$pasta}/index{$classe}.php";
			}
		}
	}

	$SQL         = new Connect();
	$laudo       = $_POST['laudo'];
	$indice      = $_POST['indice'];
	$cookie      = $_POST['cookie'];
	$imagens     = $_FILES['imagens'];
	$titulo      = $imagens['name'];
	$temporario  = $imagens['tmp_name'];
	$tamanho     = $imagens['size'];
	$lettre_c    = array("ç" , "Ç");
	$lettre_a    = array("á", "à", "ã", "â", "Á", "À", "Ã", "Â");
	$lettre_e    = array("é", "è", "ẽ", "ê", "É", "È", "Ẽ", "Ê");
	$lettre_i    = array("í", "ì", "ĩ", "î", "Í", "Ì", "Ĩ", "Î");
	$lettre_o    = array("ó", "ò", "õ", "ô", "Ó", "Ò", "Õ", "Ô");
	$lettre_u    = array("ú", "ù", "ũ", "û", "ü", "Ú", "Ù", "Ũ", "Û", "Ü");

	$separador   = "_";
	//Removendo espa�os do inicio e do fim da string
	$string      = trim($titulo);
	//Convertendo a string para min�sculas
	$string      = strtolower($string);
	//Retirando as tags HTML e PHP da string
	$string      = strip_tags($string);
	$string      = urldecode($string);
	$string      = mb_convert_encoding($string, "UTF-8");
	//Substituindo todos os espa�os por $separador
	$string      = str_ireplace("[[:space:]]", $separador, $string);
	//Substituindo caracteres especiais pela letra respectiva
	$string      = str_ireplace($lettre_c, "c", $string);
	$string      = str_ireplace($lettre_a, "a", $string);
	$string      = str_ireplace($lettre_e, "e", $string);
	$string      = str_ireplace($lettre_i, "i", $string);
	$string      = str_ireplace($lettre_o, "o", $string);
	$string      = str_ireplace($lettre_u, "u", $string);
	//Substituindo outros caracteres por "$separador"
	$string      = str_ireplace("(\(|(\))s", $separador, $string);
	$string      = str_ireplace("(\/)|(\\\)s", $separador, $string);
	$string      = str_ireplace("(\{\[)|(\]\})s", $separador, $string);
	$string      = str_ireplace("[@#\$%&\*\+=\|]", $separador, $string);
	$string      = str_ireplace("[;:'\"<>,?!_-]", $separador, $string);
	$string      = str_ireplace("[`~^¨]", $separador, $string);
	// Pasta Local
	$folder_path = "../../public/images/products/";
	// Titulo da imagem
	$image_name    =  strtolower(time().'_'.$string);
	// Nome Local
	$local_name  = $folder_path.$image_name;
	
	function reduzir($img, $max_x, $max_y, $nome_foto)
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
	
	// Reduz e Move para a Pasta no Servidor
	if(reduzir($temporario,285,214,$local_name))
	{
		$Resultado = $SQL -> Inserir("INSERT INTO tb_imagens(imagem_".$laudo.",imagem_imagem,imagem_texto) VALUES('$indice','$image_name','Texto Descritivo')");
		
		$L_1 = $_SERVER['REMOTE_ADDR'];
		$L_2 = $cookie;
		$L_3 = "cadastrar";
		$L_4 = "A��o Cadastrar Imagens Laudo: $laudo";
		$L_5 = $SQL -> Inserir("INSERT INTO tb_log (_ip,_data,_usuario,_acao,_texto) VALUES ('$L_1',NOW(),'$L_2','$L_3','$L_4')");
		
		$Otimizar = $SQL -> Atualizar("OPTIMIZE TABLE tb_imagens");
		
		$Texto = new WriteOnPicture();
		$Texto -> inputImage  = $local_name;
		$Texto -> inputType   = 'jpg';
		$Texto -> outputImage = $local_name;
		$Texto -> outputType  = 'jpg';
		$Texto -> text        = strtoupper('pet imagem');
		$Texto -> fontSize    = 3;
		$Texto -> textColor   = array(255, 255, 255);
		$Texto -> borderFlag  = true;
		$Texto -> borderColor = array(0, 0, 0);
		$Texto -> backFlag    = false;
		$Texto -> backColor   = array(204, 204, 204);
		$Texto -> marginH     = 0;
		$Texto -> marginV     = 0;
		$Texto -> alignH      = 'RIGHT';	
		$Texto -> alignV      = 'TOP';
		$Texto -> quality     = 100;
		$Texto -> opacity     = 45;
		$Texto -> show        = false;
		$Texto -> save        = true;
		$Texto -> Action();
		
		sleep(1);
		
		$Texto -> inputImage  = $local_name;
		$Texto -> inputType   = 'jpg';
		$Texto -> outputImage = $local_name;
		$Texto -> outputType  = 'jpg';
		$Texto -> text        = strtoupper('pet imagem');
		$Texto -> fontSize    = 3;
		$Texto -> textColor   = array(255, 255, 255);
		$Texto -> borderFlag  = true;
		$Texto -> borderColor = array(0, 0, 0);
		$Texto -> backFlag    = false;
		$Texto -> backColor   = array(204, 204, 204);
		$Texto -> marginH     = 0;
		$Texto -> marginV     = 0;
		$Texto -> alignH      = 'RIGHT';	
		$Texto -> alignV      = 'TOP';
		$Texto -> quality     = 100;
		$Texto -> opacity     = 45;
		$Texto -> show        = false;
		$Texto -> save        = true;
		$Texto -> Action();
		
		sleep(1);
		
		$Texto -> inputImage  = $local_name;
		$Texto -> inputType   = 'jpg';
		$Texto -> outputImage = $local_name;
		$Texto -> outputType  = 'jpg';
		$Texto -> text        = strtoupper('pet imagem');
		$Texto -> fontSize    = 3;
		$Texto -> textColor   = array(255, 255, 255);
		$Texto -> borderFlag  = true;
		$Texto -> borderColor = array(0, 0, 0);
		$Texto -> backFlag    = false;
		$Texto -> backColor   = array(204, 204, 204);
		$Texto -> marginH     = 0;
		$Texto -> marginV     = 75;
		$Texto -> alignH      = 'LEFT';	
		$Texto -> alignV      = 'CENTER';
		$Texto -> quality     = 100;
		$Texto -> opacity     = 45;
		$Texto -> show        = false;
		$Texto -> save        = true;
		$Texto -> Action();
		
		sleep(1);
		
		$Texto -> inputImage  = $local_name;
		$Texto -> inputType   = 'jpg';
		$Texto -> outputImage = $local_name;
		$Texto -> outputType  = 'jpg';
		$Texto -> text        = strtoupper($laudo);
		$Texto -> fontSize    = 3;
		$Texto -> textColor   = array(255, 255, 255);
		$Texto -> borderFlag  = true;
		$Texto -> borderColor = array(0, 0, 0);
		$Texto -> backFlag    = false;
		$Texto -> backColor   = array(204, 204, 204);
		$Texto -> marginH     = 0;
		$Texto -> marginV     = 75;
		$Texto -> alignH      = 'CENTER';	
		$Texto -> alignV      = 'CENTER';
		$Texto -> quality     = 100;
		$Texto -> opacity     = 45;
		$Texto -> show        = false;
		$Texto -> save        = true;
		$Texto -> Action();
		
		sleep(1);
		
		$Texto -> inputImage  = $local_name;
		$Texto -> inputType   = 'jpg';
		$Texto -> outputImage = $local_name;
		$Texto -> outputType  = 'jpg';
		$Texto -> text        = strtoupper('pet imagem');
		$Texto -> fontSize    = 3;
		$Texto -> textColor   = array(255, 255, 255);
		$Texto -> borderFlag  = true;
		$Texto -> borderColor = array(0, 0, 0);
		$Texto -> backFlag    = false;
		$Texto -> backColor   = array(204, 204, 204);
		$Texto -> marginH     = 0;
		$Texto -> marginV     = 75;
		$Texto -> alignH      = 'RIGHT';	
		$Texto -> alignV      = 'CENTER';
		$Texto -> quality     = 100;
		$Texto -> opacity     = 45;
		$Texto -> show        = false;
		$Texto -> save        = true;
		$Texto -> Action();
		
		sleep(1);
		
		$Texto -> inputImage  = $local_name;
		$Texto -> inputType   = 'jpg';
		$Texto -> outputImage = $local_name;
		$Texto -> outputType  = 'jpg';
		$Texto -> text        = strtoupper('pet imagem');
		$Texto -> fontSize    = 3;
		$Texto -> textColor   = array(255, 255, 255);
		$Texto -> borderFlag  = true;
		$Texto -> borderColor = array(0, 0, 0);
		$Texto -> backFlag    = false;
		$Texto -> backColor   = array(204, 204, 204);
		$Texto -> marginH     = 0;
		$Texto -> marginV     = 0;
		$Texto -> alignH      = 'LEFT';	
		$Texto -> alignV      = 'BOTTOM';
		$Texto -> quality     = 100;
		$Texto -> opacity     = 45;
		$Texto -> show        = false;
		$Texto -> save        = true;
		$Texto -> Action();
		
		sleep(1);
		
		$Texto -> inputImage  = $local_name;
		$Texto -> inputType   = 'jpg';
		$Texto -> outputImage = $local_name;
		$Texto -> outputType  = 'jpg';
		$Texto -> text        = strtoupper('pet imagem');
		$Texto -> fontSize    = 3;
		$Texto -> textColor   = array(255, 255, 255);
		$Texto -> borderFlag  = true;
		$Texto -> borderColor = array(0, 0, 0);
		$Texto -> backFlag    = false;
		$Texto -> backColor   = array(204, 204, 204);
		$Texto -> marginH     = 0;
		$Texto -> marginV     = 0;
		$Texto -> alignH      = 'CENTER';	
		$Texto -> alignV      = 'BOTTOM';
		$Texto -> quality     = 100;
		$Texto -> opacity     = 45;
		$Texto -> show        = false;
		$Texto -> save        = true;
		$Texto -> Action();
		
		sleep(1);
		
		$Texto -> inputImage  = $local_name;
		$Texto -> inputType   = 'jpg';
		$Texto -> outputImage = $local_name;
		$Texto -> outputType  = 'jpg';
		$Texto -> text        = strtoupper('pet imagem');
		$Texto -> fontSize    = 3;
		$Texto -> textColor   = array(255, 255, 255);
		$Texto -> borderFlag  = true;
		$Texto -> borderColor = array(0, 0, 0);
		$Texto -> backFlag    = false;
		$Texto -> backColor   = array(204, 204, 204);
		$Texto -> marginH     = 0;
		$Texto -> marginV     = 0;
		$Texto -> alignH      = 'RIGHT';	
		$Texto -> alignV      = 'BOTTOM';
		$Texto -> quality     = 100;
		$Texto -> opacity     = 45;
		$Texto -> show        = false;
		$Texto -> save        = true;
		$Texto -> Action();
		
		sleep(1);
		
	}
	
}

?>