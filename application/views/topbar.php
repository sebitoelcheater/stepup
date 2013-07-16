<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="es"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Top Bar</title>
  <link rel="stylesheet" href="<?=base_url()?>/assets/css/style.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
  <header>
    <div class="container">
      <h1><a href="index.html">Bienvenido, <?=$nombre?> <?=$apellido?></a></h1>
      <nav>
        <ul>
          <li><a href="index.html" class="icon tasks">Inicio <span>3</span></a></li>
          <li class="active"><a href="index.html" class="icon messages">Comunidad <span>17</span></a></li>
          <li><a href="index.html" class="icon tasks">Entregas <span>3</span></a></li>
          <li><a href="index.html" class="icon tasks">Encuestas <span>3</span></a></li>
          <li><a href="index.html" class="icon settings">Configuración </a></li>
          <li><a href="index.php/inicio/logout_user">Cerrar Sesión </a></li>

        </ul>
      </nav>
    </div>
  </header>