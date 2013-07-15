<?php
$activo = $_GET['activo'];
$array_menu = array(
	'Home'=>'index',
	'El Proyecto'=>'proyecto',
	'Quiénes Somos'=>'quienes',
	'Noticias'=>'noticias',
	'Why'=>'why'
	);
$menu = '';
foreach ($array_menu as $m=>$dir) {
	if ($activo==$dir)
		$class = 'class="active"';
	else
		$class = '';
	$menu.="<li><a href='../Step/".$dir.".html' ".$class." target='_top'><span>".$m."</span></a></li>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Free CSS template by ChocoTemplates.com</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<script src="js/jquery-1.4.1.min.js" type="text/javascript"></script>
	<script src="js/jquery.jcarousel.pack.js" type="text/javascript"></script>
	<script src="js/jquery-func.js" type="text/javascript"></script>
</head>
<body>
<div id="page" class="shell">
	<!-- Logo + Search + Navigation -->
	<div id="top">
		<div id="navigation">
			<ul>
			    <?php echo $menu; ?>
			</ul>
		</div>	
	</div>
	<!-- END Logo + Search + Navigation -->
</div>
</body>
</html>