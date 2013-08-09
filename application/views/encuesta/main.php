<center>
	<table border="2">
<?
$i = 0;
foreach ($encuestas as $value) {
	$i += 1;?>
	<form action="<?=base_url()?>index.php/encuesta/show_encuesta" method="post" name="f<?=$i?>"> 
		<input name="idE" type="hidden" value=<?=$value->id?>/>
			<tr>
			<td><?=$i?>.</td>
			<td><a href="javascript:document.f<?=$i?>.submit();"><?=$value->titulo?></a></td>
			<td><?=$value->fecha_f?>.</td>
			</tr>
	</form>
	<?
}
?>
</table>
</center>