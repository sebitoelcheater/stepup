<?
$array = array('inicio'=>'Comunidad','entrega'=>'Entregas','encuesta'=>'Encuestas','configuracion'=>'Configuración');
?>
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
      <h1><a href="<?=base_url()?>index.php/perfil/main">Bienvenido, <?=$nombre?></a></h1>
      <nav>
        <ul>
          <?
            foreach ($array as $controlador=>$item) {
              if ($item==$content){
                echo '<li class="active"><a href="'.base_url()."index.php/".$controlador.'/main" class="icon '.$controlador.'">'.$item.'</a></li>';
              } else {
                echo '<li><a href="'.base_url()."index.php/".$controlador.'/main" class="icon '.$controlador.'">'.$item./*<span>2</span>*/'</a></li>';
              }
            }?>
          <li><a href="<?=base_url()?>index.php/inicio/logout_user">Cerrar Sesión </a></li>

        </ul>
      </nav>
    </div>
  </header>