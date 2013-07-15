<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Sign Up Form</title>
  <link rel="stylesheet" href="<?=base_url()?>/assets/css/signin.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
  <form class="sign-up" action='<?=base_url()?>index.php/inicio/login_user' method='post'>
    <h1 class="sign-up-title">Login</h1>
    <input type="text" class="sign-up-input" placeholder="Username" name="username" autofocus>
    <input type="password" class="sign-up-input" placeholder="Password" name="password">
    <input type="submit" value="Login" class="sign-up-button">
  </form>
</body>
</html>
