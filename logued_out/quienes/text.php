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
?>
<html lang="en-US" class=" -webkit- -webkit-"><head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="chrome=1">
<title>Quiénes Somos | eship</title>


<link href="http://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css" data-inprogress="">



<link rel="profile" href="http://gmpg.org/xfn/11">

<link rel="stylesheet" type="text/css" media="all" href="http://www.eshipchile.com/wp-content/themes/eship/public/css/reset.css" data-inprogress="">


<link rel="stylesheet" type="text/css" media="all" href="style.css" data-inprogress="">

<link rel="shortcut icon" type="image/x-icon" href="http://www.eshipchile.com/wp-content/themes/eship/public/images/favicon.png">


<!--[if lt IE 9]>
<script src="http://www.eshipchile.com/wp-content/themes/eship/html5.js" type="text/javascript"></script>
<![endif]-->
<link rel="alternate" type="application/rss+xml" title="eship » Quiénes Somos Comments Feed" href="http://www.eshipchile.com/quienes-somos/feed/">



<script type="text/javascript" src="http://www.eshipchile.com/wp-includes/js/jquery/jquery.js?ver=1.8.3"></script>



<script type="text/javascript" src="http://www.eshipchile.com/wp-includes/js/comment-reply.min.js?ver=3.5.1"></script>
<script type="text/javascript" src="http://www.eshipchile.com/wp-content/themes/eship/public/js/jquery-ui.js?ver=3.5.1"></script>
<script type="text/javascript" src="http://www.eshipchile.com/wp-content/themes/eship/public/js/jquery.cycle.all.js?ver=3.5.1"></script>
<script type="text/javascript" src="http://www.eshipchile.com/wp-content/themes/eship/public/js/prefixfree.min.js?ver=3.5.1"></script>
<script type="text/javascript" src="http://www.eshipchile.com/wp-content/themes/eship/public/js/jquery.colorbox-min.js?ver=3.5.1"></script>
<script type="text/javascript" src="http://www.eshipchile.com/wp-content/themes/eship/public/js/jquery.simplemodal.1.4.4.min.js?ver=3.5.1"></script>
<script type="text/javascript" src="http://www.eshipchile.com/wp-content/themes/eship/public/js/script.js?ver=3.5.1"></script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://www.eshipchile.com/xmlrpc.php?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://www.eshipchile.com/wp-includes/wlwmanifest.xml"> 
<link rel="next" title="Preguntas Frecuentes" href="http://www.eshipchile.com/preguntas-frecuentes/">
<meta name="generator" content="WordPress 3.5.1">
<link rel="canonical" href="http://www.eshipchile.com/quienes-somos/">
    <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
</head>
<body>
    <div class="container container_12">
    
         
    <div id="contenido_page" class="container_12">
        <div id="contenido2" class="">
                    <p>El proyecto E-Ship es la primera experiencia de aprendizaje de innovación y emprendimiento que reúne en un mismo lugar a <strong>alumnos</strong> (de pre y post grado) <strong>de diferentes regiones de Chile</strong>, a <strong>estudiantes extranjeros</strong>, <strong>empresas chilenas</strong>, <strong>sector publico</strong> y el <strong>mundo académico</strong>, representado por tres destacadas universidades como son la <strong>Universidad de Stanford</strong>, la <strong>Pontificia Universidad Católica de Chile</strong> y la <strong>Universidad del Desarrollo</strong>. Los desafíos vendrán de la industria y del país en general, las universidades y los expertos guiaran el proceso, y los jóvenes serán el motor para que entre todos estos actores busquen soluciones a las problemáticas propuestas.</p>
<p><span style="text-decoration: underline;">Universidad del Desarrollo:</span>&nbsp;a través de su Instituto de Innovación Interdisciplinaria iCubo, programa para el desarrollo de capacidades de innovación en alumnos de pregrado, postgrado y educación ejecutiva.</p>
<p><span style="text-decoration: underline;">Stanford University:</span>&nbsp;a través de Stanford Technology Ventures Program STVP, involucra a sus futuros científicos e ingenieros en el área de emprendimiento tecnológico. STVP alienta y apoya las iniciativas y emprendimientos.</p>
<p><span style="text-decoration: underline;">Pontificia Universidad Católica de Chile (PUC):</span>&nbsp;a través de su Centro de innovación Anacleto Angelini y EmprendeUC, Subdirección de emprendimiento e innovación .</p>
<p><strong>Te invitamos a participar de la experiencia E-Ship!</strong></p>
                </div>
    </div>
    
    
    
        
        
    </div>



    <script type="text/javascript" src="http://www.eshipchile.com/wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js?ver=3.25.0-2013.01.18"></script>
<script type="text/javascript">
/* <![CDATA[ */
var _wpcf7 = {"loaderUrl":"http:\/\/www.eshipchile.com\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif","sending":"Sending ..."};
/* ]]> */
</script>
<script type="text/javascript" src="http://www.eshipchile.com/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=3.3.3"></script>


<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button id="cboxPrevious"></button><button id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div><button id="cboxClose"></button></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div>
<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button id="cboxPrevious"></button><button id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div><button id="cboxClose"></button></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div><div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button id="cboxPrevious"></button><button id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div><button id="cboxClose"></button></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div></body></html>