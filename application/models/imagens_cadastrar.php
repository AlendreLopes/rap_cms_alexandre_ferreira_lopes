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
	
	$separador   = "_";
	//Removendo espaços do inicio e do fim da string
	$string      = trim($titulo);
	//Convertendo a string para minúsculas
	$string      = strtolower($string);
	//Retirando as tags HTML e PHP da string
	$string      = strip_tags($string);
	$string      = urldecode($string);
	$string      = utf8_decode($string);
	//Substituindo todos os espaços por $separador
	$string      = eregi_replace("[[:space:]]", $separador, $string);
	//Substituindo caracteres especiais pela letra respectiva
	$string      = eregi_replace("[çÇ]", "c", $string);
	$string      = eregi_replace("[áÁäÄàÀãÃâÂ]", "a", $string);
	$string      = eregi_replace("[éÉëËèÈêÊ]", "e", $string);
	$string      = eregi_replace("[íÍïÏìÌîÎ]", "i", $string);
	$string      = eregi_replace("[óÓöÖòÒõÕôÔ]", "o", $string);
	$string      = eregi_replace("[úÚüÜùÙûÛ]", "u", $string);
	//Substituindo outros caracteres por "$separador"
	$string      = eregi_replace("(\()|(\))", $separador, $string);
	$string      = eregi_replace("(\/)|(\\\)", $separador, $string);
	$string      = eregi_replace("(\[)|(\])", $separador, $string);
	$string      = eregi_replace("[@#\$%&\*\+=\|º]", $separador, $string);
	$string      = eregi_replace("[;:'\"<>,?!_-]", $separador, $string);
	$string      = eregi_replace("[“”]", $separador, $string);
	$string      = eregi_replace("(ª)+", $separador, $string);
	$string      = eregi_replace("[`´~^°]", $separador, $string);
	
	// Pasta Local
	$pasta_local = "../../public/images_e/";
	// Titulo da imagem
	$nome_img    = time().'_'.$string;
	// Nome Local
	$nome_local  = $pasta_local.$nome_img;
	
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
	if(reduzir($temporario,285,214,$nome_local))
	{
		$Resultado = $SQL -> Inserir("INSERT INTO tb_imagens(imagem_".$laudo.",imagem_imagem,imagem_texto) VALUES('$indice','$nome_img','Texto Descritivo')");
		
		$L_1 = $_SERVER['REMOTE_ADDR'];
		$L_2 = $cookie;
		$L_3 = "cadastrar";
		$L_4 = "Ação Cadastrar Imagens Laudo: $laudo";
		$L_5 = $SQL -> Inserir("INSERT INTO tb_log (_ip,_data,_usuario,_acao,_texto) VALUES ('$L_1',NOW(),'$L_2','$L_3','$L_4')");
		
		$Otimizar = $SQL -> Atualizar("OPTIMIZE TABLE tb_imagens");
		
		$Texto = new WriteOnPicture();
		$Texto -> inputImage  = $nome_local;
		$Texto -> inputType   = 'jpg';
		$Texto -> outputImage = $nome_local;
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
		
		$Texto -> inputImage  = $nome_local;
		$Texto -> inputType   = 'jpg';
		$Texto -> outputImage = $nome_local;
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
		
		$Texto -> inputImage  = $nome_local;
		$Texto -> inputType   = 'jpg';
		$Texto -> outputImage = $nome_local;
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
		
		$Texto -> inputImage  = $nome_local;
		$Texto -> inputType   = 'jpg';
		$Texto -> outputImage = $nome_local;
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
		
		$Texto -> inputImage  = $nome_local;
		$Texto -> inputType   = 'jpg';
		$Texto -> outputImage = $nome_local;
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
		
		$Texto -> inputImage  = $nome_local;
		$Texto -> inputType   = 'jpg';
		$Texto -> outputImage = $nome_local;
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
		
		$Texto -> inputImage  = $nome_local;
		$Texto -> inputType   = 'jpg';
		$Texto -> outputImage = $nome_local;
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
		
		$Texto -> inputImage  = $nome_local;
		$Texto -> inputType   = 'jpg';
		$Texto -> outputImage = $nome_local;
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