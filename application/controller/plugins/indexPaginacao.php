<?php
class Paginacao
{
	var $Registros;
	var $ListaMenu;
	var $Endereco;
	var $TotalRegistros;
	var $TotalPaginas;
	var $Pagina;
	var $Separador;
	var $InserirPaginacao;
	var $SEnderecos;
	/**
	 * m�todo construtor da nossa classe
	 */
	function Paginacao($Registros, $Endereco, $TotalRegistros, $Pagina, $ListaMenu = "", $Separador = ' | ', $InserirPaginacao = "")
	{
		$this -> Registros        = $Registros;
		$this -> ListaMenu        = $ListaMenu;
		$this -> Endereco         = $Endereco;
		$this -> TotalRegistros   = $TotalRegistros;
		$TotalPaginas             = ($TotalRegistros <= $Registros) ? 1 : ceil($TotalRegistros/$Registros);
		$this -> TotalPaginas     = $TotalPaginas;
		$this -> Pagina           = ($Pagina != "")    ? $Pagina    : 1;
		$this -> Separador        = ($Separador != "") ? $Separador : " | ";
		$this -> InserirPaginacao = $InserirPaginacao;
		$this -> SEnderecos       = (strpos($Endereco,"?") !== false) ? "&" : "?";
	}
	/**
	 * m�todo que nos retornar� uma string com o valor a ser passado na cl�usula limit do sql
	 * @return string limit pronto pra sql
	 */
	function Limitar()
	{
		$Inicio  = ($this -> Pagina * $this -> Registros) - $this -> Registros;
		$Final   = $this -> Registros;
		$Limitar = $Inicio.",".$Final;
		return $Limitar;
	}
	/**
	 * m�tod que cria nossa pagina��o
	 * @return string menu formatado
	 */
	function Paginar($Begin=" << ",$End=" >> ",$Preview=" < ",$Next=" > ")
	{
		$Pagina           = $this -> Pagina;
		$TotalPaginas     = $this -> TotalPaginas;
		$Endereco         = $this -> Endereco;
		$InserirPaginacao = $this -> InserirPaginacao;
		$SEnderecos       = $this -> SEnderecos;
		$Begin            = ($Begin == "")  ? " << ": $Begin;
		$End              = ($End == "")    ? " >> ": $End;
		$Preview          = ($Preview == "")? " < " : $Preview;
		$Next             = ($Next == "")   ? " > " : $Next;
		 if($TotalPaginas == $Pagina)
		 {
			 			$Pagina   = $this -> Pagina - 1;
		     $Primeira = " <a href=\"".LMPaginas::Listar($Endereco,'1')."\" title=\"Primeira P&aacute;gina\">" . $Begin . "</a>\n ";
				 			$Anterior = " <a href=\"".LMPaginas::Listar($Endereco,$Pagina)."\" title=\"P&aacute;gina Anterior\">" . $Preview . "</a>\n ";
		     $Proximo  = $Next;
		     $Ultima   = $End;
		 }
		 elseif($Pagina == 1)
     {
         $Pagina   = $this -> Pagina + 1;
	 		 	$Primeira = $Begin;
         $Anterior = $Preview;
	 		 	$Proximo  = " <a href=\"".LMPaginas::Listar($Endereco,$Pagina)."\" title=\"Pr&oacute;xima P&aacute;gina\">" . $Next . "</a>\n ";
         $Ultima   = " <a href=\"".LMPaginas::Listar($Endereco,$TotalPaginas)."\" title=\"Ultima P&aacute;gina\">" . $End  . "</a>\n ";
     }
		 else
     {
				 $PAnterior= $Pagina - 1;
				 $PProxima = $Pagina + 1;
				 $Primeira = " <a href=\"".LMPaginas::Listar($Endereco,'1')."\" title=\"Primeira P&aacute;gina\">" . $Begin . "<a/>";
         $Anterior = " <a href=\"".LMPaginas::Listar($Endereco,$PAnterior)."\" title=\"P&aacute;gina Anterior\">" . $Preview . "</a>\n ";
	 		 		$Proximo  = " <a href=\"".LMPaginas::Listar($Endereco,$PProxima)."\" title=\"Pr&oacute;xima P&aacute;gina\">" . $Next . "</a>\n ";
         $Ultima   = " <a href=\"".LMPaginas::Listar($Endereco,$TotalPaginas)."\" title=\"Ultima P&aacute;gina\">" . $End . "</a>\n ";
     }
     $Pagina = "<p>\n" . $Primeira . $Anterior . "\n\n";
     if($this -> ListaMenu != "")
     {
         $ListaMenu = $this -> ListaMenu;
         $Pagina   .= $this -> Paginar_Limitado($ListaMenu,$TotalPaginas);
     }
		 else
     {
       for($Variavel = 1; $Variavel <= $TotalPaginas; $Variavel ++)
       {
         if($Variavel == $this -> Pagina)
         {
             $Pagina .= "<strong> {$Variavel} </strong> | \n";
         }
			 	 else
         {
             $Pagina .= " <a href=\"".LMPaginas::Listar($Endereco,$Variavel)."\" title=\" {$Variavel} \"> {$Variavel} </a> | \n";
         }
       }
     }
		 $Pagina .= $Proximo . $Ultima . "</p>\n";
     if($TotalPaginas == 1)
     {
         $Resultado = "<span style=\"visibility: hidden\">".$Pagina."</span>";
     }
		 elseif ($InserirPaginacao != "")
     {
         $Resultado = str_replace("><",">" . $Pagina . "<", $InserirPaginacao);
     }
		 else
     {
         $Resultado = $Pagina;
     }
     return $Resultado;
  }

    /**
     * m�todo que cria uma pagina��o limitada
     * @access private
     * @return string menu quase pronto
     */
    function Paginar_Limitado($ListaMenu,$TPagina)
    {
				$Endereco  = $this -> Endereco;
        $SEnderecos= $this -> SEnderecos;
        $Separador = $this -> Separador;
        $Pagina    = $this -> Pagina;
        $Div       = (is_int($ListaMenu/2)) ? $ListaMenu/2 : floor($ListaMenu/2);
        $Centro    = (is_int($ListaMenu/2)) ? $ListaMenu/2 : ceil($ListaMenu/2);
        if($Pagina == $TPagina)
        {
            if($TPagina >= $ListaMenu)
            {
                $Termina  = $TPagina;
                $Comeco   = $Termina - $ListaMenu + 1;
                $Variavel = $Comeco;
                while($Variavel >= $Comeco and $Variavel<=$Termina)
                {
                    $Menu .= ($Variavel == $Pagina) ? "<strong> {$Variavel} </strong>{$Separador}\n" : "<a href=\"".LMPaginas::Listar($Endereco,$Variavel)."\" title=\" {$Variavel} \"> {$Variavel} </a>{$Separador}\n";
                    $Variavel++;
                }
            }
						else
            {
                $Comeco   = 1;
                $Termina  = $TPagina;
                $Variavel = $Comeco;
                while($Variavel >= $Comeco and $Variavel <= $Termina)
                {
									$Menu .= ($Variavel == $Pagina) ? "<strong> {$Variavel} </strong>{$Separador}\n" : "<a href=\"".LMPaginas::Listar($Endereco,$Variavel)."\" title=\"{$Variavel}\">{$Variavel}</a>{$Separador}\n";
									$Variavel++;
                }
            }
        }
				elseif ($Pagina == 1)
        {
            $Comeco   = 1;
            $Termina  = ($TPagina >= $ListaMenu) ? $Comeco + $ListaMenu -1 : $TPagina;
            $Variavel = $Comeco;
            while($Variavel <= $Termina and $Variavel >= $Comeco)
            {
                $Menu .= ($Variavel == $Pagina) ? "<strong>{$Variavel}</strong>{$Separador}\n" : "<a href=\"".LMPaginas::Listar($Endereco,$Variavel)."\" title=\"{$Variavel}\">{$Variavel}</a>{$Separador}\n";
                $Variavel++;
            }

        }
		elseif ($Pagina < ($TPagina - $ListaMenu))
        {
            if($Pagina > $ListaMenu)
            {
                $Comeco   = $Pagina - $Div;
                $Termina  = $Comeco + $ListaMenu - 1;
                $Variavel = $Comeco;
                while ($Variavel <= $Termina and $Variavel >= $Comeco)
                {
                    $Menu .= ($Variavel == $Pagina) ? "<strong>{$Variavel}</strong>{$Separador}\n" : "<a href=\"".LMPaginas::Listar($Endereco,$Variavel)."\" title=\"{$Variavel}\">{$Variavel}</a>{$Separador}\n";
                    $Variavel++;
                }
            }
			elseif ($Pagina < $ListaMenu)
            {
                if($Pagina > $Centro)
                {
                    $Comeco   = $Pagina - $Div;
                    $Termina  = $Comeco + $ListaMenu - 1;
                    $Variavel = $Comeco;
                    while($Variavel <= $Termina and $Variavel >= $Comeco)
                    {
                        $Menu .= ($Variavel == $Pagina) ? "<strong>{$Variavel}</strong>{$Separador}\n" : "<a href=\"".LMPaginas::Listar($Endereco,$Variavel)."\" title=\"{$Variavel}\">{$Variavel}</a>{$Separador}\n";
                        $Variavel++;
                    }
                }
								else
                {
                    $Comeco   = 1;
                    $Termina  = $Comeco + $ListaMenu - 1;
                    $Variavel = $Comeco;
                    while($Variavel <= $Termina and $Variavel >= $Comeco)
                    {
                        $Menu .= ($Variavel == $Pagina) ? "<strong>{$Variavel}</strong>{$Separador}\n" : "<a href=\"".LMPaginas::Listar($Endereco,$Variavel)."\" title=\"{$Variavel}\">{$Variavel}</a>{$Separador}\n";
                        $Variavel++;
                    }
                }
            }
						elseif ($Pagina == $ListaMenu)
            {
                $Comeco   = $ListaMenu - $Div;
                $Termina  = $Comeco + $ListaMenu -1;
                $Variavel = $Comeco;
                while ($Variavel >= $Comeco and $Variavel <= $Termina)
                {
                    $Menu .= ($Variavel == $Pagina) ? "<strong>{$Variavel}</strong>{$Separador}\n" : "<a href=\"".LMPaginas::Listar($Endereco,$Variavel)."\" title=\"{$Variavel}\">{$Variavel}</a>{$Separador}\n";
                    $Variavel++;
                }
            }
        }
				elseif ($Pagina > $TPagina - $ListaMenu)
        {
            if($TPagina > $ListaMenu)
            {
                if($Pagina <= $TPagina - ($ListaMenu - $Centro))
                {
                    $Comeco   = $Pagina - $Div;
                    $Termina  = $Comeco + $ListaMenu - 1;
                    $Variavel = $Comeco;
                    while ($Variavel >= $Comeco and $Variavel <= $Termina)
                    {
                        $Menu .= ($Variavel == $Pagina) ? "<strong>{$Variavel}</strong>{$Separador}\n" : "<a href=\"".LMPaginas::Listar($Endereco,$Variavel)."\" title=\"{$Variavel}\">{$Variavel}</a>{$Separador}\n";
                        $Variavel++;
                    }
                }
								else
                {
                    $Comeco   = $TPagina - $ListaMenu + 1;
                    $Termina  = $Comeco + $ListaMenu - 1;
                    $Variavel = $Comeco;
                    while ($Variavel >= $Comeco and $Variavel <= $Termina)
                    {
                        $Menu .= ($Variavel == $Pagina) ? "<strong>{$Variavel}</strong>{$Separador}\n" : "<a href=\"".LMPaginas::Listar($Endereco,$Variavel)."\" title=\"{$Variavel}\">{$Variavel}</a>{$Separador}\n";
                        $Variavel++;
                    }
                }
            }
						elseif ($TPagina <= $ListaMenu)
            {
                $Comeco   = 1;
                $Termina  = $TPagina;
                $Variavel = $Comeco;
                while ($Variavel <= $Termina and $Variavel >= $Comeco)
                {
                    $Menu .= ($Variavel == $Pagina) ? "<strong>{$Variavel}</strong>{$Separador}\n" : "<a href=\"".LMPaginas::Listar($Endereco,$Variavel)."\" title=\"{$Variavel}\">{$Variavel}</a>{$Separador}\n";
                    $Variavel++;
                }
            }
        }
				elseif ($Pagina == $TPagina - $ListaMenu)
        {
            $Termina  = $TPagina - ($ListaMenu - $Div);
            $Comeco   = $Termina - $ListaMenu + 1;
            $Variavel = $Comeco;
            while ($Variavel <= $Termina and $Variavel >= $Comeco)
            {
                $Menu .= ($Variavel == $Pagina) ? "<strong>{$Variavel}</strong>{$Separador}\n" : "<a href=\"".LMPaginas::Listar($Endereco,$Variavel)."\" title=\"{$Variavel}\">{$Variavel}</a>{$Separador}\n";
                $Variavel++;
            }
        }
        $Menu = rtrim($Menu,$Separador);
        return $Menu;
    }

	/**
	* m�todo que nos retornar� aquele lembrete de localiza��o nos registros como no google ex. reg.: 1 a 5 de 10
	* @return lembrete de registros
	*/
	function Paginar_Inteligente($Modelo = "")
	{
		$VInicial = $this -> Pagina * $this -> Registros - $this -> Registros + 1;
		$VFinal   = $this -> Pagina * $this ->  Registros;
		$Total    = $this -> TotalRegistros;

		($Total - $VFinal) < $this -> ListaMenu ? $VFinal = $Total : "";

		if(!empty($Modelo))
		{
		   $Menu = substr_replace(substr_replace(substr_replace($Modelo,$Total,strpos($Modelo,"#3"),2),$VFinal,strpos($Modelo,"#2"),2),$VInicial,strpos($Modelo,"#1"),2);
		}
		else
		{
		   $Menu = "Itens ".$VInicial." a ".$VFinal." de ".$Total;
		}
		return $Menu;
	}
}
?>
