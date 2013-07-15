<?php
// Conectando, seleccionando la base de datos
$link = mysql_connect('localhost', 'cheaperc_user1', 'pko2RWu')
    or die('No se pudo conectar: ' . mysql_error());
mysql_select_db('cheaperc_database90336247') or die('No se pudo seleccionar la base de datos');

// Realizar una consulta MySQL
$query = 'SELECT * FROM step_contents where page_container="quienessomos"';
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

// Imprimir los resultados en HTML
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    $array[$line['name']] = $line['content'];
}
// Liberar resultados
mysql_free_result($result);

// Cerrar la conexión
mysql_close($link);
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
	<!-- Main -->
	<div id="main">
		<!-- Two Column Content -->
		<div class="cols two-cols">
			<div class="cl">&nbsp;</div>
			<div class="col">
				<h2><?= utf8_encode($array['t1a'])?></h2><br>
				<?= utf8_encode($array['t1b'])?>
			</div>
			<div class="cl">&nbsp;</div>
		</div>
		<!-- END Two Column Content -->
	</div>
	<!-- END Main -->
	<br />
</div>
</body>
</html>