<script language="javascript">
function showmydiv(id) {
	if (document.getElementById('r'+id).style.display == "none") {document.getElementById('r'+id).style.display = "block";}
	else {document.getElementById('r'+id).style.display = "none";};
}

</script>
<link rel="stylesheet" href="<?=base_url()?>/assets/css/live_button.css">
<link rel="stylesheet" href="<?=base_url()?>/assets/css/pagination.css">

<div class="last">
<link rel="stylesheet" href="<?=base_url()?>assets/css/tweeter.css" type="text/css">
<div role="main" aria-labelledby="content-main-heading" class="content-main" id="timeline">
   <div class="content-header">
      <div class="header-inner">
         <h2 id="content-main-heading" class="js-timeline-title">Comunidad
         </h2>
      </div>
   </div>
   <div class="stream-container " data-max-id="99287136750153727" data-since-id="349998049189298176">
      <div class="stream profile-stream">
         <ol class="stream-items js-navigable-stream" id="stream-items-id">
<?
$newRespuestas = array();
foreach ($mensajes as $mensaje) {
    $newRespuestas[$mensaje->id]=null;
}
foreach ($respuestas as $respuesta) {
	$newRespuestas[$respuesta->idM][] = $respuesta;
}
foreach ($mensajes as $mensaje) {
	$bloque = '<li onclick="showmydiv('.$mensaje->id.');" class="js-stream-item stream-item stream-item expanding-stream-item" data-item-id="349998049189298176" id="stream-item-tweet-349998049189298176" data-item-type="tweet">
               <div class="tweet original-tweet js-stream-tweet js-actionable-tweet js-profile-popup-actionable js-original-tweet">
                  <span class="icon dogear"></span>
                  <div class="content">
                     <div class="stream-item-header">
                        <a href="swdw"><img class="avatar js-action-profile-avatar" src="https://si0.twimg.com/profile_images/1435743772/alerico_normal.jpg" alt=""></a>
                        <strong class="fullname js-action-profile-name show-popup-with-id">'.$mensaje->titulo.'</strong>
                        <span>‏</span><span class="username js-action-profile-name"><b><a href="ss">'.$usuarios[$mensaje->idU]->nombre." ".$usuarios[$mensaje->idU]->apellido.'</a></b></span>
                        </a>
                        <small class="time">
                        <a><span>'.$respuesta->fecha.'</span></a>
                        </small>
                     </div>
                     <p class="js-tweet-text tweet-text">'.$mensaje->mensaje.'</p>
                     <div class="expanded-content js-tweet-details-dropdown">
                     </div>
                  </div>
               </div>
            </li>';
	echo $bloque;
	echo '<div id=r'.$mensaje->id.' style="display: none;">';
    if (count($newRespuestas)>0 & $newRespuestas[$mensaje->id]!=null){
		foreach ($newRespuestas[$mensaje->id] as $respuesta) {
              $bloque2 = '<li class="js-stream-item stream-item stream-item expanding-stream-item" data-item-id="349998049189298176" id="stream-item-tweet-349998049189298176" data-item-type="tweet">
               <div class="tweet original-tweet js-stream-tweet js-actionable-tweet js-profile-popup-actionable js-original-tweet">
                  <span class="icon dogear"></span>
                  <div class="content" style="margin-left:18%; width:82%;">
                     <div class="stream-item-header">
                        <a href="swdw"><img class="avatar js-action-profile-avatar" src="https://si0.twimg.com/profile_images/1435743772/alerico_normal.jpg" alt=""></a>
                        <strong class="fullname js-action-profile-name show-popup-with-id"></strong>
                        <span>‏</span><span class="username js-action-profile-name"><b><a href="ddsa">'.$usuarios[$respuesta->idU]->nombre." ".$usuarios[$respuesta->idU]->apellido.'</a></b></span>
                        </a>
                        <small class="time">
                        <a><span>'.$respuesta->fecha.'</span></a>
                        </small>
                     </div>
                     <p class="js-tweet-text tweet-text">'.$respuesta->respuesta.'</p>
                     <div class="expanded-content js-tweet-details-dropdown">
                     </div>
                  </div>
               </div>
            </li>';
            echo $bloque2;
		}}
		echo '
        <li class="js-stream-item stream-item stream-item expanding-stream-item js-has-navigable-stream open" data-item-id="345215184115208192" id="stream-item-tweet-345215184115208192" data-item-type="tweet" style="margin-top: 8px; margin-bottom: 8px;">
<ol class="expanded-conversation expansion-container js-expansion-container js-navigable-stream" style="height: auto;"><li class="original-tweet-container">
<div class="inline-reply-tweetbox swift">

<form class="tweet-form condensed" method="post" action="'.base_url().'index.php/inicio/new_respuesta">
    <textarea rows="2" cols="86" name="respuesta"></textarea>
    <input type="hidden" name="idM" value="'.$mensaje->id.'">

   <br><br>

    <div class="tweet-button">
      <input type="submit" class="btn primary-btn tweet-action" value="Responder">
    </div>
  </div>
</form>
</div></li>';
}
?>
         </ol>
         <div class="stream-footer ">
               <div class="stream-loading">
                  <div class="stream-end-inner">
                    <section class="container_pagination">
    <nav class="pagination">
        <?
        $a = 1;
        if($block!=1)
            echo '<a href="'.base_url().'index.php/inicio/go_to_block/'.(int)($block-1).'" class="prev">&lt;</a>';
        if ($block>5)
            $a = $block-5;
        while ($a<$block){
            echo '<a href="'.base_url().'index.php/inicio/go_to_block/'.$a.'">'.$a.'</a>';
            $a += 1;
        }
        echo "<span>$block</span>";
        $a = $block+1;
        while ($a<=$blocks and $a<=$block+5){
            echo '<a href="'.base_url().'index.php/inicio/go_to_block/'.$a.'">'.$a.'</a>';
            $a+=1;
        }
        if($blocks!=$block)
            echo '<a href="'.base_url().'index.php/inicio/go_to_block/'.(int)($block+1).'" class="next">&gt;</a>';
        ?>
    </nav>
  </section>

                  </div>
                  <div class="container_button_newpost">
                    <a href="<?=base_url()?>index.php/inicio/before_new_post" class="button_newpost button_newpost-green">Nuevo Post</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div><!-- /.last -->
<?= $blocks?>

