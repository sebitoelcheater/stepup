<div id="top-bar-bg">
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Menu with Notification Badges</title>
  <link rel="stylesheet" href="<?=base_url()?>/assets/css/topbar_logued.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
  <section class="container">
    <nav>
      <ul>
      	<?php
      	$menus = array(
      		"home"=>'Home',
      		"elproyecto"=>'El Proyecto',
      		"quienessomos"=>'Quienes Somos',
      		"noticias"=>'Noticias',
      		"why"=>'Why',
      		"logout" => 'Logout'
      		);
      	$new_menus = array();
      	foreach ($menus as $key => $value) {
      		if ($actived==$key)
      			$new_menus[$key] = '<li class="active"><a href="show_'.$key.'">'.$value.'</a></li>';
      		else if ($key=='logout')
      			$new_menus[$key] = '<li><a href="../inicio/logout_user">Logout</a></li>';
      		else
      			$new_menus[$key] = '<li><a href="show_'.$key.'">'.$value.'</a></li>';

      	}
      	foreach ($new_menus as $value) {
      		echo $value;
      	}
      	?>
      </ul>
    </nav>
  </section>

</body>
</html>

</div>