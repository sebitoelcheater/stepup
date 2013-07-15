<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xml:lang="en-us" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Top bar fixed</title>
<!-- Hoja de estilos -->
<link rel="stylesheet" href="<?=base_url()?>/assets/css/topbar.css">
<!-- Llamamos librerias jquery para efecto transparente -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script></head>
<body>
<script type="text/javascript">
jQuery(function() {
jQuery(window).scroll(function(){
var scrollTop = jQuery(window).scrollTop();
if(scrollTop != 0){
jQuery('#top-bar-bg').stop().animate({'opacity':'0.2'},400);
}else{	
jQuery('#top-bar-bg').stop().animate({'opacity':'1'},400);


}
});

jQuery('#top-bar-bg').hover(

function (e) {
var scrollTop = jQuery(window).scrollTop();
if(scrollTop != 0){
jQuery('#top-bar-bg').stop().animate({'opacity':'1'},400);

}
},
function (e) {
var scrollTop = jQuery(window).scrollTop();
if(scrollTop != 0){
jQuery('#top-bar-bg').stop().animate({'opacity':'0.2'},400);
}
}
);
});
</script>