<?php
$Proxima  = $_GET['indice'];
$texto_1  = "SELECT count(*) AS Total FROM protocolos, laudos_#A# WHERE protocolo_id = _laudo AND _data BETWEEN CURDATE() - INTERVAL 7 DAY AND CURDATE()";
$Total    = $SQL -> Consultar(str_replace($procura_1,$troca_1,$texto_1));
$Resultado= mysql_result($Total,0,"Total");
$Paginacao= new Paginacao(50,LMPaginas::Pagina($pagina),$Resultado,$Proxima,5);
$Limitar  = $Paginacao -> Limitar();
$texto_2  = "SELECT
 protocolo_id,
 _protocolo,
 _paciente,
 _genero,
 _clinica_titulo,
 _data,
 _concluido
FROM protocolos, laudos_#A#  WHERE protocolo_id = _laudo AND _data BETWEEN CURDATE() - INTERVAL 7 DAY AND CURDATE() ORDER BY protocolo_id DESC LIMIT $Limitar";
$Laudo    = $SQL -> Consultar(str_replace($procura_1,$troca_1,$texto_2));
$Lista    = $Paginacao -> Paginar("","","","");
$Lembrete = $Paginacao -> Paginar_Inteligente("Exibindo registro #1 a #2 de #3 encontrados");
$Laudos   = mysql_num_rows($Laudo);
?>
<div id="protocolos_realizados_">
<?php
if($Laudos)
{
 echo "<div id='lembrete'> . {$Lembrete} . {$Lista} .</div>";
}
?>
<table class="tablesorter" cellpadding="1">
<tbody>
<?php
if($Laudos)
{
 $x = 0;
 while($Listar = mysql_fetch_array($Laudo))
 {
	 $y = NULL;
	 if($x ++ % 2 == 0)
	 {
		 $y = 'class="odd"';
	 }
	 $solicitado= Functions::retorna_data('-','/',$Listar[_data]);
	 $concluido = Functions::retorna_data('-','/',$Listar[_concluido]);
	 $texto_3   = "<a href=\"excluir\" t_t=\"laudos_#A#\" c_t=\"excluir\" c_t_v=\"#B#\" c_i=\"_id\" c_i_v=\"$Listar[_id]\" title=\"Excluir Exame\">Excluir</a>";
	 $excluir   = str_replace($procura_2,$troca_2,$texto_3);
	 // URL Prim�ria sem Listagem
	 $url_p    = LMPaginas::Listar($pagina . '_visualizar',$Listar['protocolo_id']);
	 // URL Secund�ria com Listagem
	 $url_s    = LMPaginas::Visualiza($pagina . '_visualizar',$Listar['protocolo_id'],$indice);
	 // URL Nova
	 // $url_n  = !empty($indice) ? $url_p : $url_s;
	 $url_n  = $url_p;
	 ?>
	 <tr <?php echo $y;?>>
	 <td align="center" title="Editar | Visualizar Protocolo: <?php echo $Listar['_protocolo'];?>">
	 <a href="<?php echo $url_n;?>"><?php echo $Listar['_protocolo'];?></a></td>
	 <td title="Paciente"><?php echo $Listar['_paciente']; ?></td>
	 <td title="Sexo"><?php echo $Listar['_genero']; ?></td>
	 <td title="Cl&iacute;nica | Requisitante"><?php echo $Listar['_clinica_titulo']; ?></td>
	 <td align="center" title="Date de Solicita&ccedil;&atilde;o"><?php echo $solicitado; ?></td>
	 <td align="center" title="Date de Conclus&atilde;o"><?php echo $concluido;?></td>
	 <td align="center"><?php echo $excluir;?></td>
	 </tr>
	 <?php
 }
}
else
{
 ?>
 <tr>
 <td colspan="7" align="center">N&atilde;o h&aacute; Exames cadastrados</td>
 </tr>
 <?php
}
?>

</tbody>

</table>

<div id='lembrete'>&nbsp;</div>
<?php
/*
if($Laudos)
{
 //echo "<div id='lembrete'> . {$Lembrete} . {$Lista} .</div>";
}
*/
?>

</div>
