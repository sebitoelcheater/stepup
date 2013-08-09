<div style='margin-left: 300px;'>
	<table border="2">
<?
$i = 0;
foreach ($encuestas as $value) {
	$i += 1;?>
	<form action="<?=base_url()?>index.php/encuesta/show_encuesta" method="post" name="f<?=$i?>"> 
		<input name="idE" type="hidden" value=<?=$value->id?>/>
			<tr>
			<td width=20><h3><?=$i?>.</h3></td>
			<td><a href="javascript:document.f<?=$i?>.submit();"><h3><?=$value->titulo?></h3></a></td>
			<td width=250><center><i>Finaliza el <?=$value->fecha_f?>.</i></center></td>
			</tr>
	</form>
	<?
}
?>
</table>
</div>