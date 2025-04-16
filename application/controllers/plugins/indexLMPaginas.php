<?php
class LMPaginas
{
	// Laudos e Protocolos
	public static function Pagina($pagina)
	{
		if( LMPaginas::HabilitadoModRewrite() )
		{
			return "/".LMPaginas::convertString($pagina)."/";
		}
		else
		{
			return "index.php?pagina=$pagina";
		}
	}
	public static function Listar($pagina,$indice)
	{
		if( LMPaginas::HabilitadoModRewrite() )
		{
			return "/".LMPaginas::convertString($pagina)."/".LMPaginas::convertString($indice)."/";
		}
		else
		{
			return "index.php?pagina=$pagina&indice=$indice";
		}
	}
	public static function Cadastrar($pagina,$laudo,$indice)
	{
		if( LMPaginas::HabilitadoModRewrite() )
		{
			return "/".LMPaginas::convertString($pagina)."/".LMPaginas::convertString($laudo)."/".LMPaginas::convertString($indice)."/";
		}
		else
		{
			return "index.php?pagina=$pagina&laudo=$laudo&indice=$indice";
		}
	}
	public static function Imagem($pagina,$imagem,$indices)
	{
		if( LMPaginas::HabilitadoModRewrite() )
		{
			return "/".LMPaginas::convertString($pagina)."/".LMPaginas::convertString($imagem)."/".LMPaginas::convertString($indices)."/";
		}
		else
		{
			return "index.php?pagina=$pagina&imagem=$imagem&indices=$indices";
		}
	}
	public static function Visualiza($pagina,$laudo,$indice)
	{
		if( LMPaginas::HabilitadoModRewrite() )
		{
			return "/".LMPaginas::convertString($pagina)."/".LMPaginas::convertString($laudo)."/".LMPaginas::convertString($indice)."/";
		}
		else
		{
			return "index.php?pagina=$pagina&laudo=$laudo&indice=$indice";
		}
	}
	public static function Visualizar($pagina,$laudo,$indice,$voltar)
	{
		if( LMPaginas::HabilitadoModRewrite() )
		{
			return "/".LMPaginas::convertString($pagina)."/".LMPaginas::convertString($laudo)."/".LMPaginas::convertString($indice)."/".LMPaginas::convertString($voltar)."/";
		}
		else
		{
			return "index.php?setor=$setor&laudo=$laudo&indice=$indice&voltar=$voltar";
		}
	}
	// Função de Impressão de Protocolos
	public static function Impressao($protocolo)
	{
		if( LMPaginas::HabilitadoModRewrite() )
		{
			return "/$protocolo/";
		}
		else
		{
			return "/indexPrint.php?protocolo=$protocolo";
		}
	}
	private static function convertString($String)
	{
		
		$Separador = "_";
		// Removendo espaços do inicio e do fim da string
		$String = trim($String);
		// Convertendo a string para minúsculas
		$String = strtolower($String);
		// Retirando as tags HTML e PHP da string
		$String = strip_tags($String);
		// Substituindo todos os espaços por $Separador
		$String = eregi_replace("[[:space:]]", $Separador, $String);
		// Substituindo caracteres especiais pela letra respectiva
		$String = eregi_replace("[çÇ]", "c", $String);
		$String = eregi_replace("[áÁäÄàÀãÃâÂ]", "a", $String);
		$String = eregi_replace("[éÉëËèÈêÊ]", "e", $String);
		$String = eregi_replace("[íÍïÏìÌîÎ]", "i", $String);
		$String = eregi_replace("[óÓöÖòÒõÕôÔ]", "o", $String);
		$String = eregi_replace("[úÚüÜùÙûÛ]", "u", $String);
		// Substituindo outros caracteres por "$Separador"
		$String = eregi_replace("(\()|(\))", $Separador, $String);
		$String = eregi_replace("(\/)|(\\\)", $Separador, $String);
		$String = eregi_replace("(\[)|(\])", $Separador, $String);
		$String = eregi_replace("[@#\$%&\*\+=\|º]", $Separador, $String);
		$String = eregi_replace("[;:'\"<>,\.?!_-]", $Separador, $String);
		$String = eregi_replace("[“”]", $Separador, $String);
		$String = eregi_replace("(ª)+", $Separador, $String);
		$String = eregi_replace("[`´~^°]", $Separador, $String);
		// Removendo o excesso de "$Separador" por apenas um
		$String = eregi_replace("($Separador)+", $Separador, $String);
		//Quebrando a string para um tamanho pré-definido
		$String = substr($String, 0, 100);
		// Removendo o "$Separador" do inicio e fim da string
		$String = eregi_replace("(^($Separador)+)|(($Separador)+$)", "", $String);

		return $String;
	}		
	private static function HabilitadoModRewrite()
	{
		return true;
	}
}
?>