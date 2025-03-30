<!-- Inicio Menu : Exames a serem Cadastrados -->

<?php

$m_    = $SQL -> Consultar("SELECT * FROM tb_menu ORDER BY menu_id ASC");

$li_   = 1;

while ($ms_ = mysql_fetch_array($m_))
{

?>

<ul class="menuh">
	
	<li id="submenu-<?php echo $li_;?>" class="subv">
	
	<?php $li_ ++; ?>
	
	<a href="menu"><?php echo $ms_[menu_titulo];?></a>
	
	<!-- Sub Menu: AP, DI ML e Serviços -->
	
	<ul class="menuv">
	
	<?php
	
	$p_ = $SQL -> Consultar("SELECT * FROM tb_menu_primario WHERE primario_ordem = '$ms_[menu_ordem]' AND primario_dispor = 's' ORDER BY primario_titulo ASC");
	
	while($ps_ = mysql_fetch_array($p_))
	{
		
		?>
		
		<li id="submenu-<?php echo $li_;?>" class="submenu">
		
		<?php
		
		$li_ ++;
		
		$Listagem = ($ps_[primario_menu_secundario] == "sim") ? 'menu' : LMPaginas::Cadastrar('cadastrar',$ps_[primario_pagina],$_GET['indice']);
		
		?>
		
		<a href="<?php echo $Listagem;?>"><?php echo $ps_[primario_titulo];?></a>
		
		<?php
		
		if ($ps_[primario_menu_secundario] == "sim")
		{
			
			?>
			
			<ul class="menuv">
			
			<?php
			
			$s_ = $SQL -> Consultar("SELECT * FROM tb_menu_secundario WHERE secundario_ordem = '$ps_[primario_id]' AND secundario_dispor = 's' ORDER BY secundario_titulo ASC");
			
			while($ss_ = mysql_fetch_array($s_))
			{
				
				?>
				
				<li id="submenu-<?php echo $li_;?>">
				
				<?php $li_ ++; ?>
				
				<a href="<?php echo LMPaginas::Cadastrar('cadastrar',$ss_[secundario_pagina],$_GET['indice']);?>"><?php echo $ss_[secundario_titulo];?></a>
				
				</li>
				
				<?php
				
			}
			
		?>
		
		</ul>
		
		<?php
		
		}
		
		?>
		
		</li>
		
	<?php
	
	}
	
	?>
	
	</ul>
	
	</li>
		
</ul>

<?php

}

?>

<!-- Fim    Menu :  Exames a serem Cadastrados -->