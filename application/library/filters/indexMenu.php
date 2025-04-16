<!-- Inicio Menu : �reas -->

<?php

$Menu    = $SQL -> Consultar("SELECT * FROM tb_menu ORDER BY menu_id ASC");

$Li_id   = 1;

while ($Menus = mysql_fetch_array($Menu))
{

?>

<ul class="menuh">
	
	<li id="submenu-<?php echo $Li_id;?>" class="subv">
	
	<?php $Li_id ++; ?>
	
	<a href="menu"><?php echo $Menus[menu_titulo];?></a>
	
	<!-- Sub Menu: AP, DI ML e Servi�os -->
	
	<ul class="menuv">
	
	<?php
	
	$Primario = $SQL -> Consultar("SELECT * FROM tb_menu_primario WHERE primario_ordem = '$Menus[menu_ordem]' AND primario_dispor = 's' ORDER BY primario_titulo ASC");
	
	while($Primarios = mysql_fetch_array($Primario))
	{
		
		?>
		
		<li id="submenu-<?php echo $Li_id;?>" class="submenu">
		
		<?php
		
		$Li_id ++;
		
		$Listagem = ($Primarios[primario_menu_primario] == "menu") ? 'menu' : LMPaginas::Pagina($Primarios[primario_pagina]);
		
		?>
		
		
		<a href="<?php echo $Listagem;?>"><?php echo $Primarios[primario_titulo];?></a>
		
		<?php
		
		if ($Primarios[primario_menu_secundario] == "sim")
		{
			
			?>
			
			<ul class="menuv">
			
			<?php
			
			$Secundario = $SQL -> Consultar("SELECT * FROM tb_menu_secundario WHERE secundario_ordem = '$Primarios[primario_id]' AND secundario_dispor = 's' ORDER BY secundario_titulo ASC");
			
			while($Secundarios = mysql_fetch_array($Secundario))
			{

                            ?>

                            <li id="submenu-<?php echo $Li_id;?>">

                            <?php $Li_id ++; ?>

                            <a href="<?php echo LMPaginas::Pagina($Secundarios[secundario_pagina]);?>"><?php echo $Secundarios[secundario_titulo];?></a>

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

<!-- Fim    Menu :  �reas -->