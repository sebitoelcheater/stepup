<?php
// Conectando, seleccionando la base de datos
$link = mysql_connect('localhost', 'cheaperc_user1', 'pko2RWu')
    or die('No se pudo conectar: ' . mysql_error());
mysql_select_db('cheaperc_database90336247') or die('No se pudo seleccionar la base de datos');

// Realizar una consulta MySQL
$query = 'SELECT * FROM step_contents where page_container="home"';
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

// Imprimir los resultados en HTML
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    $array[$line['name']] = $line['content'];
}
// Liberar resultados
mysql_free_result($result);

// Cerrar la conexión
mysql_close($link);

header(' Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<script src="js/jquery-1.4.1.min.js" type="text/javascript"></script>
	<script src="js/jquery.jcarousel.pack.js" type="text/javascript"></script>
	<script src="js/jquery-func.js" type="text/javascript"></script>
</head>
<body>
<div id="page" class="shell">
	<!-- Main -->
	<div id="main">
		<!-- Three Column Content -->
		<div class="cols three-cols">
			<div class="cl">&nbsp;</div>
			<div class="col">
				<h2><?=utf8_encode($array['t1a'])?></h2>
				<h3></h3>
				<p><?=utf8_encode($array['t1d'])?></p>
			</div>
			<div class="col">
				<h2><?=utf8_encode($array['t2a'])?></h2>
				<p><?=utf8_encode($array['t2d'])?></p>
			</div>
			<div class="col col-last">
				<h2><?=utf8_encode($array['t3a'])?></h2>
				<p><?=utf8_encode($array['t3d'])?></p>
			</div>
			<div class="cl">&nbsp;</div>
		</div>
		<!-- END Three Column Content -->
		<!-- Two Column Content -->
		<div class="cols two-cols">
			<div class="cl">&nbsp;</div>
			<div class="col">
				<h2><?=utf8_encode($array['t4a'])?></h2>
				<?=utf8_encode($array['t4b'])?>
			</div>
			<div class="col col-last">
				<h2><?=utf8_encode($array['t5a'])?></h2>
				<?=utf8_encode($array['t5b'])?>
			</div>
			<div class="cl">&nbsp;</div>
		</div>
		<!-- END Two Column Content -->
	</div>
	<!-- END Main -->
	<!-- Footer -->
	<div id="footer">
		<p class="right">&copy; 2010 - CompanyName &nbsp; Design by <a href="http://chocotemplates.com" target="_blank" title="The Sweetest CSS Templates WorldWide">Chocotemplates.com</a></p>
		<p><a href="#">Home</a><span>&nbsp;</span><a href="#">About Us</a><span>&nbsp;</span><a href="#">Services</a><span>&nbsp;</span><a href="#">Solutions</a><span>&nbsp;</span><a href="#">Support</a><span>&nbsp;</span><a href="#">Partners</a><span>&nbsp;</span><a href="#">Contact</a></p>
		<div class="cl">&nbsp;</div>
	</div>
	<!-- END Footer -->
	<br />
</div>
</body>
</html>