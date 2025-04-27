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

	$SQL     = new Connect();
	
	// Obt�m as Imagens
	$indice  = $_POST['indice'];
	// Laudo
	$laudo   = $_POST['laudo'];
	// Imagem
	$imagem  = $_FILES['imagem'];
	
	$cookie  = $_POST['cookie'];
	
	// Imagens
	$imagens = $SQL -> Consultar("SELECT * FROM tb_imagens WHERE imagem_id = '$indice'");
	// Imagens Selecionar
	$listar  = mysql_fetch_array($imagens);
	// Imagem Deletar
	$deletado    = unlink("../../assets/images_e/{$listar[imagem_imagem]}");
	
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
	
	// Se Imagem Deletada cadastra a nova Imagem
	if($deletado)
	{
		// Dados da Imagem
		$titulo      = $imagem['name'];
		$temporario  = $imagem['tmp_name'];
		// Separador
		$separador   = "_";
		//Removendo espa�os do inicio e do fim da string
		$string      = trim($titulo);
		//Convertendo a string para min�sculas
		$string      = strtolower($string);
		//Retirando as tags HTML e PHP da string
		$string      = strip_tags($string);
		$string      = urldecode($string);
		$string      = utf8_decode($string);
		//Substituindo todos os espa�os por $separador
		$string      = eregi_replace("[[:space:]]", $separador, $string);
		//Substituindo caracteres especiais pela letra respectiva
		$string      = eregi_replace("[��]", "c", $string);
		$string      = eregi_replace("[����������]", "a", $string);
		$string      = eregi_replace("[��������]", "e", $string);
		$string      = eregi_replace("[��������]", "i", $string);
		$string      = eregi_replace("[����������]", "o", $string);
		$string      = eregi_replace("[��������]", "u", $string);
		//Substituindo outros caracteres por "$separador"
		$string      = eregi_replace("(\()|(\))", $separador, $string);
		$string      = eregi_replace("(\/)|(\\\)", $separador, $string);
		$string      = eregi_replace("(\[)|(\])", $separador, $string);
		$string      = eregi_replace("[@#\$%&\*\+=\|�]", $separador, $string);
		$string      = eregi_replace("[;:'\"<>,?!_-]", $separador, $string);
		$string      = eregi_replace("[��]", $separador, $string);
		$string      = eregi_replace("(�)+", $separador, $string);
		$string      = eregi_replace("[`�~^�]", $separador, $string);
		
		// Pasta Local
		$pasta_local = "../../assets/images_e/";
		// Titulo da imagem
		$nome_img    = time().'_'.$string;
		// Nome Local
		$nome_local  = $pasta_local.$nome_img;
		
		// Reduz e Move para a Pasta no Servidor
		if(reduzir($temporario,285,214,$nome_local))
		{
			$Resultado= $SQL -> Atualizar("UPDATE tb_imagens SET imagem_imagem = '$nome_img' WHERE imagem_id = '$indice'");
			
			$L_1 = $_SERVER['REMOTE_ADDR'];
			$L_2 = 	$cookie;
			$L_3 = "atualizar";
			$L_4 = "A��o Atualizar Imagens: $indice";
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
			$Texto -> alignH      = 'LEFT';	
			$Texto -> alignV      = 'TOP';
			$Texto -> quality     = 100;
			$Texto -> opacity     = 45;
			$Texto -> show        = false;
			$Texto -> save        = true;
			$Texto -> Action();
			
			sleep(1);
			
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
			$Texto -> alignH      = 'CENTER';	
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
	
}

?>