<?php

class Connect
{
	
	var $Servidor = 'localhost';
	var $Banco    = 'petimagem_';
	var $Usuario  = 'petimagem';
	var $Segredo  = 'ix8H#@9B@3X#@ltz';
	
	// Variáveis que Desenpenham as Principais Funções no BD
	// Query - Faz a Consulta no BD
	var $Pesquisa;
	// Query - Inserir no BD
	var $Inserir;
	// Query - Deletar no BD
	var $Deletar;
	// Query - Atualiza o BD
	var $Atualizar;
	// Conexão com o Banco
	var $Conectar;
	// Resultado de uma Consulta
	var $Referencia;
	
	// Função que Conecta-se ao BD e o Seleciona
	function Conecta_MySQL()
	{
		$this -> Conectar = mysql_connect($this -> Servidor, $this -> Usuario, $this -> Segredo);
		if(!$this -> Conectar)
		{
			echo "<p>Não foi possível conectar-se ao Servidor MySQL.</p>\n";
			echo "<p><strong>Erro MySQL: ".mysql_error()."</strong></p>\n";
		}
		else if(!mysql_select_db($this -> Banco, $this -> Conectar))
		{
			echo "<p>Não foi possível selecionar o Banco de Dados {$Banco_de_Dados}.</p>";
			echo "<p><strong>Erro MySQL: ".mysql_error()."</strong></p>";
		}
	}
	function Consultar($Pesquisa)
	{
		$this -> Conecta_MySQL();
		$this -> Pesquisa = $Pesquisa;
		if($this -> Referencia = mysql_query($this -> Pesquisa))
		{
			$this -> Fecha_Conexao();
			return $this -> Referencia;
		}
		else
		{
			exit("<p><strong>Erro MySQL: ".mysql_error()."</strong></p>");
			$this -> Fecha_Conexao();
		}
	}
	function Inserir($Inserir)
	{
		$this -> Conecta_MySQL();
		$this -> Inserir = $Inserir;
		if($this -> Referencia = mysql_query($this -> Inserir))
		{
			$this -> Fecha_Conexao();
			return $this -> Referencia;
		}
		else
		{
			exit("<p><strong>Erro MySQL: ".mysql_error()."</strong></p>");
			$this -> Fecha_Conexao();
		}
	}
	function Deletar($Deletar)
	{
		$this -> Conecta_MySQL();
		$this -> Deletar = $Deletar;
		if($this -> Referencia = mysql_query($this -> Deletar))
		{
			$this -> Fecha_Conexao();
			return $this -> Referencia;
		}
		else
		{
			exit("<p><strong>Erro MySQL: ".mysql_error()."</strong></p>");
			$this -> Fecha_Conexao();
		}
	}
	function Atualizar($Atualizar)
	{
		$this -> Conecta_MySQL();
		$this -> Atualizar = $Atualizar;
		if($this -> Referencia = mysql_query($this -> Atualizar))
		{
			$this -> Fecha_Conexao();
			return $this -> Referencia;
		}
		else
		{
			exit("<p><strong>Erro MySQL: ".mysql_error()."</strong></p>");
			$this -> Fecha_Conexao();
		}
	}
	function Fecha_Conexao()
	{
		return mysql_close($this -> Conectar);
	}
}

?>