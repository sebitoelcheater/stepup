<script language="javascript">
function showmydiv() {
	if (document.getElementById('r1').style.display == "none") {document.getElementById('r1').style.display = "block";}
	else {document.getElementById('r1').style.display = "none";};
}

</script>
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
foreach ($respuestas as $respuesta) {
	$newRespuestas[$respuesta->idM][] = $respuesta;
}
foreach ($mensajes as $mensaje) {
	$bloque = '<li onclick="showmydiv();" class="js-stream-item stream-item stream-item expanding-stream-item" data-item-id="349998049189298176" id="stream-item-tweet-349998049189298176" data-item-type="tweet">
               <div class="tweet original-tweet js-stream-tweet js-actionable-tweet js-profile-popup-actionable js-original-tweet">
                  <span class="icon dogear"></span>
                  <div class="content">
                     <div class="stream-item-header">
                        <a href="swdw"><img class="avatar js-action-profile-avatar" src="https://si0.twimg.com/profile_images/1435743772/alerico_normal.jpg" alt=""></a>
                        <strong class="fullname js-action-profile-name show-popup-with-id">'.$mensaje->titulo.'</strong>
                        <span>‏</span><span class="username js-action-profile-name"><s>@</s><b><a href="#">Aleccitico</a></b></span>
                        </a>
                        <small class="time">
                        <a><span>26 jun</span></a>
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
		foreach ($newRespuestas[$mensaje->id] as $respuesta) {
				$bloque2 = '<li class="js-stream-item stream-item stream-item expanding-stream-item" data-item-id="349998049189298176" id="stream-item-tweet-349998049189298176" data-item-type="tweet">
               <div class="tweet original-tweet js-stream-tweet js-actionable-tweet js-profile-popup-actionable js-original-tweet  
                  " data-feedback-key="stream_status_349998049189298176" data-tweet-id="349998049189298176" data-item-id="349998049189298176" data-screen-name="Aleccitico" data-name="Alejandro Allende A" data-user-id="330854666" data-expanded-footer="&lt;div class=&quot;js-tweet-details-fixer tweet-details-fixer&quot;&gt;
                  &lt;div class=&quot;js-tweet-media-container &quot;&gt;&lt;/div&gt;
                  &lt;div class=&quot;entities-media-container &quot; style=&quot;min-height:0px&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;js-machine-translated-tweet-container&quot;&gt;&lt;/div&gt;
                  &lt;div class=&quot;js-tweet-stats-container tweet-stats-container &quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;client-and-actions&quot;&gt;
                  &lt;span class=&quot;metadata&quot;&gt;
                  &lt;span title=&quot;2:10 PM - 26 jun 13&quot;&gt;2:10 PM - 26 jun 13&lt;/span&gt;
                  &amp;middot; &lt;a class=&quot;permalink-link js-permalink js-nav&quot; href=&quot;/Aleccitico/status/349998049189298176&quot;  tabindex=&quot;-1&quot;&gt;Detalles&lt;/a&gt;
                  &lt;/span&gt;
                  &lt;/div&gt;
                  &lt;/div&gt;
                  " data-mentions="ICONNutrition">
                  <span class="icon dogear"></span>
                  <div class="content" style="margin-left:18%; width:82%;">
                     <div class="stream-item-header">
                        <a class="account-group js-account-group js-action-profile js-user-profile-link js-nav" href="/Aleccitico" data-user-id="330854666">
                        <img class="avatar js-action-profile-avatar" src="https://si0.twimg.com/profile_images/1435743772/alerico_normal.jpg" alt="">
                        <span>‏</span><span class="username js-action-profile-name"><s>@</s><b>Aleccitico</b></span>
                        </a>
                        <small class="time">
                        <a href="/Aleccitico/status/349998049189298176" class="tweet-timestamp js-permalink js-nav" title="2:10 PM - 26 jun 13"><span class="_timestamp js-short-timestamp " data-time="1372281012" data-long-form="true">26 jun</span></a>
                        </small>
                     </div>
                     <p class="js-tweet-text tweet-text">'.$respuesta->respuesta.'</p>
                     <div class="expanded-content js-tweet-details-dropdown">
                     </div>
                  </div>
               </div>
            </li>';
            echo $bloque2;
		}
		echo '<li class="js-stream-item stream-item stream-item expanding-stream-item js-has-navigable-stream open" data-item-id="345215184115208192" id="stream-item-tweet-345215184115208192" data-item-type="tweet" style="margin-top: 8px; margin-bottom: 8px;">
<ol class="expanded-conversation expansion-container js-expansion-container js-navigable-stream" style="height: auto;"><li class="original-tweet-container">
<div class="inline-reply-tweetbox swift">
<form class="tweet-form condensed" method="post" target="tweet-post-iframe" action="//upload.twitter.com/i/tweet/create_with_media.iframe" enctype="multipart/form-data">


  <div class="tweet-content">
    <i class="add-photo-icon hidden"></i>
    <span class="tweet-drag-help tweet-drag-photo-here hidden">Arrastra una foto aquí</span>
    <span class="tweet-drag-help tweet-or-drag-photo-here hidden">O arrastra una foto aquí</span>
    <label class="visuallyhidden" for="tweet-box-reply-to-345215184115208192" id="tweet-box-template-label">Texto del Tweet</label>

    
    <div aria-labelledby="tweet-box-template-label" id="tweet-box-template" class="tweet-box rich-editor notie" contenteditable="true" spellcheck="true" role="textbox" aria-multiline="true" dir="ltr">
    <div></div></div>
    <div class="rich-normalizer"><div>Responder a <a class="twitter-atreply pretty-link" href="/ChileFunk"><s>@</s>ChileFunk</a> <a class="twitter-atreply pretty-link" href="/Aleccitico"><s>@</s>Aleccitico</a>&nbsp;</div></div>


    <textarea class="tweet-box-shadow" name="status" id="tweet-box-reply-to-345215184115208192"></textarea>

   <br>

    <div class="tweet-button">
      <button class="btn primary-btn tweet-action" type="button">Responder</button>
    </div>
  </div>
</form></div></li></ol></li>';
	echo "</div>";
}
?>
         </ol>
         <div class="stream-footer ">
               
               <div class="stream-loading">
                  <div class="stream-end-inner">
                  	<nav class="pagination">
      <a href="index.html" class="prev">&lt;</a>
      <a href="index.html">1</a>
      <a href="index.html">2</a>
      <a href="index.html">3</a>
      <span>4</span>
      <a href="index.html">5</a>
      <a href="index.html" class="next">&gt;</a>
    </nav>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div><!-- /.last -->